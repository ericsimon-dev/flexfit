<?php
function get_partenaire()
{
    
    global $bdd;
    
    $query = "  SELECT * FROM partenaire";
    $result = mysqli_query($bdd,$query);

    
    return $result;
}
function get_un_partenaire($id)
{    
    global $bdd;
    $query = "SELECT * FROM partenaire where id='$id'";
    //$followingdata = $result->fetch_assoc()
    //$result = mysqli_query($bdd,$query);
    $result = $bdd->query($query);
    $result = $result->fetch_array(MYSQLI_ASSOC);
    return $result;
    
    



}
function get_services($id)
{
    global $bdd;
    $query = "SELECT * FROM service s LEFT JOIN service_partenaire on id=id_service where id_partenaire='$id'";
    $result = mysqli_query($bdd,$query);
    return $result;
    
}

function modifier_etat_partenaire($id)
{
    global $bdd;
    $bdd->query(" UPDATE partenaire SET is_active = NOT is_active where id ='$id'");
    
}

function insert_utilisateur($nom,$mail,$telephone)
{
    
    global $bdd;
    $bdd->query("INSERT INTO `flexfit`.`partenaire` (nom, telephone) VALUES ('$nom', '$telephone')");
    $id_partenaire = mysqli_insert_id($bdd);

    $bdd->query("INSERT INTO `flexfit`.`utilisateur` (`email`, `role`,id_partenaire) VALUES ('$mail', 1,$id_partenaire)");
    
}