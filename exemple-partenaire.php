<?php include "./vue/head.php" ?>
<?php include "./vue/navbar.php" ?>

<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="w-25 text-center rounded-pill mx-auto mt-4 mb-5 p-3 para-partenaire">
                Informations Générales
            </div>
            <div class="row">
                <div class="col text-center mb-2">Nom : Basic-Flex</div>
                <div class="col text-center">Email : eric@simon.fr</div>
                <div class="col text-center mb-2">Téléphone : 0678563892</div>
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
                <div class="col offset-md-2 mb-4">
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
            <div class="row">
                <div class="col-md-2 mb-3">
                    <div class="card bg-primary text-white h-100 background-card">
                        <div class="card-body py-3 text-center big">Basic-Flex Route de Vannes</div>
                        <div class="card-footer d-flex background-card-bottom">
                            <a class="text-white text-decoration-none small" href="exemple-structure.php">Voir la structure</a>
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card bg-primary text-white h-100 background-card">
                        <div class="card-body py-3 text-center big">Basic-Flex Saint Jean</div>
                        <div class="card-footer d-flex background-card-bottom">
                            <a class="text-white text-decoration-none small" href="exemple-structure.php">Voir la structure</a>
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card bg-primary text-white h-100 background-card">
                        <div class="card-body py-3 text-center big">Basic-Flex Atlantis</div>
                        <div class="card-footer d-flex background-card-bottom">
                            <a class="text-white text-decoration-none small" href="exemple-structure.php">Voir la structure</a>
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card bg-primary text-white h-100 background-card">
                        <div class="card-body py-3 text-center big">Basic-Flex Rue du Calvaire</div>
                        <div class="card-footer d-flex background-card-bottom">
                            <a class="text-white text-decoration-none small" href="exemple-structure.php">Voir la structure</a>
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once "vue/form-structure.php" ?>
        </div>
    </div>