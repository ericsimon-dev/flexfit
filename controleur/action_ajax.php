<?php
include_once('../modele/partenaire.php');
include_once('..//modele/connexion_bdd.php');


$logFile = "view.log";



$id = $_POST['id'];
$action = $_POST['action'];

switch ($action) {
    case "etat_partenaire":
        modifier_etat_partenaire($id);
        break;
    case "ajout_partenaire":
        insert_utilisateur("");
        break;
    case "ajout_structure":
        echo "i égal 2";
        break;
}

?>