<?php
    
//récupération de l'ensemble des artistes dans la base
    include_once('modele/get_structure.php');
    
    $lesstructures = get_structure();
    
    include_once("vue/vue_structure.php");