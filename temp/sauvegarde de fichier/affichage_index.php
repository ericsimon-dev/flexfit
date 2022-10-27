<?php require "./vue/head.php" ?>
<?php require "./vue/navbar.php" ?>


<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4 mt-3">Tout les partenaires : </h4>
            </div>
        </div>
        <!-- Conteneur qui va accueillir toutes les "cartes" partenaires -->
        <div class="row">
            <!-- exemples de cartes partenaires -->
            <?php foreach ($partenaire as $partenaires) : ?>
                <div class="col-md-3 mb-3">
                    <div class="card bg-primary text-white h-100 background-card">
                        <div class="card-body py-5 font-body text-center"><?php echo $elements->pictures->picture[2]->filename; ?></div>
                        <div class="card-footer d-flex background-card-bottom">
                            <a class="text-white text-decoration-none" href="exemple-partenaire.php">Voir le partenaire</a>
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php include "./composant/carte-partenaire.php" ?>
            <?php include "./composant/carte-partenaire.php" ?>
            <?php include "./composant/carte-partenaire.php" ?>
            <?php include "./composant/carte-partenaire.php" ?>
            <?php include "./composant/carte-partenaire.php" ?>
            <?php include "./composant/carte-partenaire.php" ?>
            <?php include "./composant/carte-partenaire.php" ?>
            <?php include "./composant/carte-partenaire.php" ?>
        </div>
    </div>
    <!-- Bouton pour ajouter un partenaire -->
    <?php require "./vue/form-partenaire.php" ?>
    <?php require "./vue/end.php" ?>