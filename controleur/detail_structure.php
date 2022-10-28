<?php 
    
	$id = $_GET["id"];	
	
    
    
    include_once('modele/structure.php');

    
    $une_structure = get_une_structure($id);
    $les_services = get_services_par_structure($id);
    
    include_once("vue/vue_detail_structure.php");
?>