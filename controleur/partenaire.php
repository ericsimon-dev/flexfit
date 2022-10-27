<?php
    
    //récupération de l'ensemble des artistes dans la base
    include_once('modele/get_partenaire.php');
    
    $lespartenaires = get_partenaire();
    
    // affichage d'une carte partenaire pour chaque partenaire présent dans la bdd
    include_once("vue/vue_partenaire.php");

    // ajout du bouton et de la modal Bootstrap
    include_once("vue/form-partenaire.php");