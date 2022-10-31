<?php
include "head.php";
?>
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4 mt-5">Tout les partenaires : </h4>
            </div>
        </div>
    </div>
    <div class="row">
        <?php
        foreach ($lespartenaires as $unPartenaire) :
            $nom    = $unPartenaire['nom'];
            $id    = $unPartenaire['id'];

        ?>
            <div class="col-md-3 mb-3 ms-3 me-3">
                <div class="card bg-primary text-white h-100 background-card">
                    <div class="card-body py-5 font-body text-center"><?php echo $nom ?></div>
                    <div class="card-footer d-flex background-card-bottom">

                        <a class="text-white text-decoration-none" href="index.php?section=vue_detail_partenaire&id=<?php echo $id ?>">Voir le partenaire</a>

                        <span class="ms-auto">
                            <a href="index.php?section=vue_detail_partenaire&id=<?php echo $id ?>>" class="text-decoration-none"><i class="bi bi-chevron-right text-decoration-none"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>