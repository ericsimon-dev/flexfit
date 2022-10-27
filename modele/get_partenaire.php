<?php

function get_partenaire()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM partenaire");
    $req->execute();
    $partenaires = $req->fetchAll();
        
    return $partenaires;
}