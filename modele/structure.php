<?php

function get_une_structure($id)
{
    

    global $bdd;
    $query = "SELECT * FROM structure where id='$id'";
    //$followingdata = $result->fetch_assoc()
    //$result = mysqli_query($bdd,$query) or die(mysql_error());
    $result = $bdd->query($query);
    $result = $result->fetch_array(MYSQLI_ASSOC);
    return $result;
}
function get_services_par_structure($id)
{
    global $bdd;
    $query = "SELECT service.* FROM structure LEFT JOIN PARTENAIRE ON structure.id_partenaire = PARTENAIRE.id LEFT JOIN SERVICE_PARTENAIRE ON PARTENAIRE.id = SERVICE_PARTENAIRE.id_partenaire LEFT JOIN SERVICE ON SERVICE.id = SERVICE_PARTENAIRE.id_service Where STRUCTURE.id = $id ";
    $result = mysqli_query($bdd,$query) or die(mysql_error());
    return $result;
           
    
}
function get_les_structures($id)
{
    global $bdd;
    $query = "SELECT * FROM structure LEFT JOIN PARTENAIRE ON structure.id_partenaire = PARTENAIRE.id where PARTENAIRE.id='$id'";
    $result = mysqli_query($bdd,$query) or die(mysql_error());
    return $result;
           
}

