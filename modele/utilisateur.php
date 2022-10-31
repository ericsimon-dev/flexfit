<?php
function get_un_utilisateur($id)
{
    global $bdd;
           
    
    $query = "SELECT * FROM utilisateur where id_partenaire='$id'";
    $result = $bdd->query($query);
    $result = $result->fetch_array(MYSQLI_ASSOC);
    return $result;
}