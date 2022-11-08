<?php
include_once('../modele/partenaire.php');
include_once('..//modele/connexion_bdd.php');


$logFile = "view.log";



$data = (json_decode($_POST['data']));
$action = ($_POST['action']);

switch ($action) {
    case "etat_partenaire":
        modifier_etat_partenaire($data->{'id'});
        break;
    case "ajout_partenaire":
        insert_utilisateur($data->{'nom'},$data->{'mail'},$data->{'telephone'});
        break;
    case "ajout_structure":
        echo "i égal 2";
        break;
}

?>