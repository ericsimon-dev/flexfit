<?php

function get_une_structure($id)
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM structure where id='$id'");
    $req->execute();
    $structure = $req->fetch();
        
    return $structure;
}
function get_services_par_structure($id)
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT service.* FROM structure LEFT JOIN PARTENAIRE ON structure.id_partenaire = PARTENAIRE.id LEFT JOIN SERVICE_PARTENAIRE ON PARTENAIRE.id = SERVICE_PARTENAIRE.id_partenaire LEFT JOIN SERVICE ON SERVICE.id = SERVICE_PARTENAIRE.id_service Where STRUCTURE.id = $id ");
    $req->execute();
    $structure = $req->fetchAll();
        
    return $structure;
}
function get_les_structures($id)
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM structure LEFT JOIN PARTENAIRE ON structure.id_partenaire = PARTENAIRE.id where PARTENAIRE.id='$id'");
    $req->execute();
    $les_structures = $req->fetchAll();
        
    return $les_structures;
}

