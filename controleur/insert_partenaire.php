<?php
include_once('../modele/partenaire.php');
include_once('..//modele/connexion_bdd.php');
//TODO
echo("<script>console.log('PHP proooooooooout');</script>");
// $name = $_POST['name'];
// $mail = $_POST['mail'];
// $phone = $_POST['phone'];
$mail = 'ericdsfghrezrfqrstd@orange.fr';

insert_utilisateur($mail);

?>