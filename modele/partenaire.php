<?php
function get_partenaire()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM partenaire");
    $req->execute();
    $partenaires = $req->fetchAll();
        
    return $partenaires;
}
function get_un_partenaire($id)
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM partenaire where id='$id'");
    $req->execute();
    $partenaire = $req->fetch();
        
    return $partenaire;
}
function get_services($id)
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM service s LEFT JOIN service_partenaire on id=id_service where id_partenaire='$id'");
    $req->execute();
    $services = $req->fetchAll();
        
    return $services;
}

function modifier_etat_partenaire($id)
{
    global $bdd;
    $bdd->exec(" UPDATE partenaire SET is_active = NOT is_active where id ='$id'");
    
}


