<?php
function get_partenaire()
{
    
    global $bdd;
    
    $query = "  SELECT * FROM partenaire";
    $result = mysqli_query($bdd,$query) or die(mysql_error());

    
    return $result;
}
function get_un_partenaire($id)
{    
    global $bdd;
    $query = "SELECT * FROM partenaire where id='$id'";
    //$followingdata = $result->fetch_assoc()
    //$result = mysqli_query($bdd,$query) or die(mysql_error());
    $result = $bdd->query($query);
    $result = $result->fetch_array(MYSQLI_ASSOC);
    return $result;
    
    



}
function get_services($id)
{
    global $bdd;
    $query = "SELECT * FROM service s LEFT JOIN service_partenaire on id=id_service where id_partenaire='$id'";
    $result = mysqli_query($bdd,$query) or die(mysql_error());
    return $result;
    
}

function modifier_etat_partenaire($id)
{
    global $bdd;
    $bdd->query(" UPDATE partenaire SET is_active = NOT is_active where id ='$id'");
    
}


