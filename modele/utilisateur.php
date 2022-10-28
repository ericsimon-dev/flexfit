<?php
function get_un_utilisateur($id)
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM utilisateur where id_partenaire='$id'");
    $req->execute();
    $partenaire = $req->fetch();
        
    return $partenaire;
}