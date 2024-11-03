<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistence/DAO/CampeonDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/Campeones.php');
require_once(dirname(__FILE__) . '/../../../app/models/validations/ValidationsRules.php');//TODO AQUI PARE

$_CampeonController = new CampeonController();

// Enrutamiento de las acciones
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["type"] == "create"){
        $_CampeonController->createAction();
    }
    else if ($_POST["type"] == "edit"){
        $_CampeonController->editAction();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    //Llamo que hace la edición contra BD
    $_CampeonController->deleteAction();
}

class CampeonController{
    
    /**
     * Parameterless constractor.
     */
    public function __construct() {
    }
    
    // Obtención de la lista completa de ofertas
    function readAction() {
        $campeonDAO = new CampeonDAO();
        return $campeonDAO->selectAll();
    }
    
    // Función encargada de crear nuevas ofertas
    function createAction() {
        // Obtención de los valores del formulario y validación
        $company = ValidationsRules::test_input($_POST["company"]);
        $position = ValidationsRules::test_input($_POST["position"]);
        $function = ValidationsRules::test_input($_POST["function"]);
        // Creación de objeto auxiliar   
        $offer = new Offer();
        $offer->setCompany($company);
        $offer->setPosition($position);
        $offer->setFunction($function);
        //Creamos un objeto OfferDAO para hacer las llamadas a la BD
        $offerDAO = new OfferDAO();
        $offerDAO->insert($offer);

        header('Location: ../../../index.php');
    }

    // Función encargada de crear nuevas ofertas
    function editAction() {
        // Obtención de los valores del formulario y validación    
        $id = $_POST["id"];
        $company = $_POST["company"];
        $position = $_POST["position"];
        $function = $_POST["function"];
        // Creación de objeto auxiliar   
        $offer = new Offer();
        $offer->setIdOffer($id);
        $offer->setCompany($company);
        $offer->setPosition($position);
        $offer->setFunction($function);
        //Creamos un objeto OfferDAO para hacer las llamadas a la BD
        $offerDAO = new OfferDAO();
        $offerDAO->update($offer);

        header('Location: ../../../index.php');
    }

    function deleteAction() {
        $id = $_GET["id"];

        $offerDAO = new OfferDAO();
        $offerDAO->delete($id);

        header('Location: ../../../index.php');
    }
    
    
}



?>