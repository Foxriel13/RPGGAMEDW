<?php

class Campeones {

    private $idCampeon;
    private $NombreInvocador;
    private $Descripcion;
    private $Avatar;
    private $Attak_Power;
    private $LifeLevel;
    private $Weapon;

    public function getIdCampeon() {
        return $this->idCampeon;
    }

    public function getNombreInvocador() {
        return $this->NombreInvocador;
    }

    public function getDescripcion() {
        return $this->Descripcion;
    }

    public function getAvatar() {
        return $this->Avatar;
    }

    public function getAttak_Power() {
        return $this->Attak_Power;
    }

    public function getLifeLevel() {
        return $this->LifeLevel;
    }

    public function getWeapon() {
        return $this->Weapon;
    }

    public function setIdCampeon($idCampeon): void {
        $this->idCampeon = $idCampeon;
    }

    public function setNombreInvocador($NombreInvocador): void {
        $this->NombreInvocador = $NombreInvocador;
    }

    public function setDescripcion($Descripcion): void {
        $this->Descripcion = $Descripcion;
    }

    public function setAvatar($Avatar): void {
        $this->Avatar = $Avatar;
    }

    public function setAttak_Power($Attak_Power): void {
        $this->Attak_Power = $Attak_Power;
    }

    public function setLifeLevel($LifeLevel): void {
        $this->LifeLevel = $LifeLevel;
    }

    public function setWeapon($Weapon): void {
        $this->Weapon = $Weapon;
    }

    function privateCampeon2HTML() {
        $result = '<div class="col-md-4">';
        $result .= '<div class="card mb-4">';
        $result .= '<img src="creature2.jpg" class="card-img-top" alt="Creature 2">'; // Imagen de ejemplo
        $result .= '<div class="card-body">';
        $result .= '<h5 class="card-title">' . $this->getNombreInvocador() . '</h5>';
        $result .= '<p class="card-text">' . $this->getDescripcion() . '</p>';
        $result .= '<a href="offer/detail.php?id=' . $this->getIdCampeon() . '" class="btn btn-info">Más información</a>';
        $result .= '<a href="offer/edit.php?id=' . $this->getIdCampeon() . '" class="btn btn-success">Modificar</a>';
        $result .= '<a href="../../controllers/offer/OfferController.php?id=' . $this->getIdCampeon() . '" class="btn btn-danger">Exterminar</a>';
        $result .= '</div>'; // Cierre de card-body
        $result .= '</div>'; // Cierre de card
        $result .= '</div>'; // Cierre de col-md-4

        return $result;
    }
}
