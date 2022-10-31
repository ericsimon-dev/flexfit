<?php
include_once('../modele/partenaire.php');
include_once('..//modele/connexion_bdd.php');


$logFile = "view.log";
$id = $_POST['id'];

file_put_contents($logFile, $id);
modifier_etat_partenaire($id);

?>