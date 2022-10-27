<?php

// connexion à la bdd
include_once('modele/connexion_bdd.php');

// on importe le head de notre html
include_once ("vue/head.php");

// on importe la barre de navigation
include_once ("vue/navbar.php");

// on importe le controleur, le body de notre page


if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controleur/partenaire.php');
    
}

else
{
    
    if ($_GET['section'] == 'partenaire')
    {  
            echo ("<script>console.log('Debug Objects: proutPartenaire' );</script>");
            include_once('controleur/partenaire.php');
    }
    if ($_GET['section'] == 'detail_partenaire')
    {  
            include_once('controleur/detail_partenaire.php');
    }
    if ($_GET['section'] == 'connexion')
    {  
        
            include_once('controleur/connexion.php');
    }
}


include_once("vue/end.php");
?>