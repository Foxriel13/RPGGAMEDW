<?php

//dirname(__FILE__) Es el directorio del archivo actual
require_once(dirname(__FILE__) . '\..\conf\PersistentManager.php');


class CampeonDAO {

    //Se define una constante con el nombre de la tabla
    const CAMPEON_TABLE = 'Campeones';

    //Conexión a BD
    private $conn = null;

    //Constructor de la clase
    public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }

    public function selectAll() {
        $query = "SELECT * FROM " . CampeonDAO::CAMPEON_TABLE;
        $result = mysqli_query($this->conn, $query);
        $Campeones= array();
        while ($CampeonBD = mysqli_fetch_array($result)) {

            $Campeon = new Campeones();
            $Campeon->setIdCampeon($CampeonBD["IdCampeon"]);
            $Campeon->setNombreInvocador($CampeonBD["NombreInvocador"]);
            $Campeon->setDescripcion($CampeonBD["Descripcion"]);
            $Campeon->setAvatar($CampeonBD["Avatar"]);
            $Campeon->setAttak_Power($CampeonBD["Attak_Power"]);
            $Campeon->setLifeLevel($CampeonBD["LifeLevel"]);
            $Campeon->setWeapon($CampeonBD["Weapon"]);
            array_push($Campeones, $Campeon);
        }
        return $Campeones;
    }

    public function insert($Campeon) {
        $query = "INSERT INTO " . CampeonDAO::CAMPEON_TABLE .
                " (company, position, function) VALUES(?,?,?,?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $NombreInvocador = $Campeon->getNombreInvocador();
        $Descripcion = $Campeon->getDescripcion();
        $Avatar = $Campeon->getAvatar();
        $Attak_Power = $Campeon->getAttak_Power();
        $LifeLevel = $Campeon->getLifeLevel();
        $Weapon = $Campeon->getWeapon();
        
        mysqli_stmt_bind_param($stmt, 'sssssss', $NombreInvocador, $Descripcion, $Avatar,$Attak_Power,$LifeLevel,$Weapon);
        return $stmt->execute();
    }

    public function selectById($id) {
        $query = "SELECT NombreInvocador, Descripcion, Avatar, Attak_Power, LifeLevel, Weapon FROM " . CampeonDAO::CAMPEON_TABLE . " WHERE IdCampeon=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $NombreInvocador, $Descripcion, $Avatar,$Attak_Power,$LifeLevel,$Weapon);

        $Campeon = new Campeones();
        while (mysqli_stmt_fetch($stmt)) {
            $Campeon->setIdCampeon($id);
            $Campeon->setNombreInvocador($NombreInvocador);
            $Campeon->setDescripcion($Descripcion);
            $Campeon->setAvatar($Avatar);
            $Campeon->setAttak_Power($Attak_Power);
            $Campeon->setLifeLevel($LifeLevel);
            $Campeon->setWeapon($Weapon);
       }

        return $Campeon;
    }

    public function editar($Campeon) {
        $query = "UPDATE " . CampeonDAO::CAMPEON_TABLE .
                " SET NombreInvocador=?, Descripcion=?, Avatar=?, Attak_Power=?, LifeLevel=?, Weapon=? "
                . " WHERE IdCampeon=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $NombreInvocador = $Campeon->getNombreInvocador();
        $Descripcion = $Campeon->getDescripcion();
        $Avatar = $Campeon->getAvatar();
        $Attak_Power = $Campeon->getAttak_Power();
        $LifeLevel = $Campeon->getLifeLevel();
        $Weapon = $Campeon->getWeapon();
        $idCampeon = $Campeon->getIdCampeon();
        mysqli_stmt_bind_param($stmt, 'ssssssi', $NombreInvocador, $Descripcion, $Avatar, $Attak_Power, $LifeLevel, $Weapon, $idCampeon);
        return $stmt->execute();
    }
    
    public function delete($id) {
        $query = "DELETE FROM " . CampeonDAO::CAMPEON_TABLE . " WHERE IdCampeon =?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return $stmt->execute();
    }

        
}

?>
