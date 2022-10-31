<?php 
    
	$id = $_GET["id"];	
	
    
    include_once('modele/partenaire.php');
    include_once('modele/structure.php');
    include_once('modele/utilisateur.php');

    
    $utilisateur = get_un_utilisateur($id);
    
    $un_partenaire = get_un_partenaire($id);
    $partenaire_nom = $un_partenaire['nom'];
    $partenaire_is_active = $un_partenaire['is_active'];
    
    $les_structures = get_les_structures($id);    
    $les_services = get_services($id);       
    


//          ----------------- Debug -----------------
foreach ($les_services as $un_service) : 
    $nom_service= $un_service['nom'];
    $id_service	= $un_service['id'];


    echo ("<script>console.log('Debug Objects: $nom_service  $id_service' );</script>");
endforeach;
//          -----------------------------------------


    include_once("vue/vue_detail_partenaire.php");
?>
