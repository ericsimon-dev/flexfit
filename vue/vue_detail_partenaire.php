<?php include "./vue/head.php" ?>
<?php include "./vue/navbar.php" ?>

<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="w-25 text-center rounded-pill mx-auto mt-4 mb-5 p-3 para-partenaire">
                Informations Générales
            </div>
            <div class="row">
                <div class="col text-center mb-2">Nom : <?=$partenaire_nom;?></div>
                <div class="col text-center">Email : <?=$utilisateur['email'];?></div>
            </div>
            <div class="row">

                <div class="col text-center actif-text mt-5">Actif :<label class="custom-control teleport-switch">
                        <input type="checkbox" class="teleport-switch-control-input" checked="">
                        <span class="teleport-switch-control-indicator"></span>
                    </label></div>
            </div>
            <div class="w-25 text-center rounded-pill mx-auto mt-5 mb-5 p-3 para-partenaire">
                Les Services
            </div>
            <div class="row">
                <div class="col offset-md-2">
                    <label class="custom-control teleport-switch">
                        <input type="checkbox" class="teleport-switch-control-input" checked="">
                        <span class="teleport-switch-control-indicator"></span>
                    </label>
                    <span class="big">Distributeur alimentaire</span>
                </div>
                
                <div class="col offset-md-2">
                    <label class="custom-control teleport-switch">
                        <input type="checkbox" class="teleport-switch-control-input" checked="">
                        <span class="teleport-switch-control-indicator"></span>
                    </label>
                    <span class="big">Boissons en vente marque FlexFit</span>
                </div>
                <!-- <div class="form-check form-switch col offset-md-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                    <label class="form-check-label" for="flexSwitchCheckDefault">Distributeur alimentaire</label>
                </div> -->
            </div>
            <div class="row">
                <div class="col offset-md-2">
                    <label class="custom-control teleport-switch">
                        <input type="checkbox" class="teleport-switch-control-input" checked="">
                        <span class="teleport-switch-control-indicator"></span>
                    </label>
                    <span class="big">Lavage de serviette</span>
                </div>
                <div class="col offset-md-2">
                    <label class="custom-control teleport-switch">
                        <input type="checkbox" class="teleport-switch-control-input" checked="">
                        <span class="teleport-switch-control-indicator"></span>
                    </label>
                    <span class="big">Ventre de gourde FlexFit</span>

                </div>
            </div>
            <div class="w-25 text-center rounded-pill mx-auto mt-5 mb-5 p-3 para-partenaire">
               
            
            
            
            Les Structures
            </div>

            
            ?>
            <div class="row">

                <?php 
                foreach ($les_structures as $une_structure) : 
                    $structure_id= $une_structure['id'];
                    $structure_nom= $une_structure['nom'];
                    $structure_adresse= $une_structure['adresse'];
                    $structure_is_active= $une_structure['is_active'];
                    $structure_telephone= $une_structure['telephone'];
                ?>

                <div class="col-md-2 mb-3">
                    <div class="card bg-primary text-white h-100 background-card">
                        <div class="card-body py-3 text-center big"><?=$structure_nom;?></div>
                        <div class="card-footer d-flex background-card-bottom">
                            <a class="text-white text-decoration-none small" href="index.php?section=vue_detail_structure&id=<?=$structure_id;?>">Voir la structure</a>
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
                
                
            </div>
            <?php include_once "vue/vue_form-structure.php" ?>
        </div>
    </div>