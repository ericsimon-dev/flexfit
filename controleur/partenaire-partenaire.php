<?php
    
//récupération de l'ensemble des artistes dans la base
    include_once('modele/get_partenaire.php');
    
    $lespartenaires = get_partenaire();
    
    include_once("vue/vue_partenaire.php");