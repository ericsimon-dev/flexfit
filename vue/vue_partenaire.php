<?php
include "head.php";
?>
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4 mt-3">Tout les partenaires : </h4>
            </div>
        </div>
        <div class="row">
<?php
foreach ($lespartenaires as $unPartenaire) : ?>
    <div class="col-md-3 mb-3">
        <div class="card bg-primary text-white h-100 background-card">
            <div class="card-body py-5 font-body text-center"><?php echo $unPartenaire['nom']?></div>
            <div class="card-footer d-flex background-card-bottom">
                <a class="text-white text-decoration-none" href="vue/exemple-partenaire.php">Voir le partenaire</a>
                <span class="ms-auto">
                    <i class="bi bi-chevron-right"></i>
                </span>
            </div>
        </div>
    </div>
<?php endforeach; ?>
