<?php

function get_structure()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM structure");
    $req->execute();
    $structures = $req->fetchAll();
        
    return $structures;
}