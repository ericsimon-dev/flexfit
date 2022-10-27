<?php
// connexion à la bdd
include_once('modele/connexion_bdd.php');

// on importe le head de notre html
include_once ("vue/head.php");

// on importe la barre de navigation
include_once ("composant/navbar.php");

// on importe le controleur, le body de notre page
include_once("controleur/partenaire.php");

include_once("vue/end.php");
?>