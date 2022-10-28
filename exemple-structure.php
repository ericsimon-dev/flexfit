<?php
foreach ($les_services as $un_service): 
    $nom_service= $un_service['nom'];
    $id_service	= $un_service['id'];


    echo ("<script>console.log('Debug Objects: $nom_service $id_service ' );</script>");
endforeach;
?>

<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="w-25 text-center rounded-pill mx-auto mt-4 mb-5 p-3 para-partenaire">
                Informations Générales
            </div>
            <div class="row">
                <div class="col text-center mb-2">Nom : <?=$une_structure['nom'];?></div>
                <div class="col text-center">Téléphone : <?=$une_structure['telephone'];?></div>
                <div class="col text-center mb-2">Adresse complète : <?=$une_structure['adresse'];?></div>
            </div>
            <div class="row">

                <div class="col text-center actif-text mt-5">Actif :<label class="custom-control teleport-switch">
                        <input type="checkbox" class="teleport-switch-control-input" checked="">
                        <span class="teleport-switch-control-indicator"></span>
                    </label></div>
            </div>
            <div class="w-25 text-center rounded-pill mx-auto mt-5 mb-5 p-3 para-partenaire">
                Les Services par défaut
            </div>
            <div class="row">
                <div class="col offset-md-2 mb-4">
                    <span class="big">Distributeur alimentaire</span>
                </div>
                <div class="col offset-md-2">
                    <span class="big">Boissons en vente marque FlexFit</span>
                </div>
            </div>
            <div class="row">
                <div class="col offset-md-2">
                    <span class="big">Lavage de serviette</span>
                </div>
                <div class="col offset-md-2">
                    <span class="big">Ventre de gourde FlexFit</span>
                </div>
            </div>
        </div>