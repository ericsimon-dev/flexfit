<?php include_once "vue/head.php"; ?>
<link rel="stylesheet" href="vue/css/connexion.css"/>
<div class="boddy">
    <div class="login-page">
        <h1 class="text-center mb-5 customa">FlexFit</h1>
        <div class="form">
            <form class="login-form" method="POST" action="modele/gestion_connexion.php">
                <label for="mail" class="custom-control-label mb-2">Adresse e-mail</label>
                <input type="mail" name="mail" placeholder="eric@orange.fr" />
                <label for="mail" class="custom-control-label mt-2 mb-2">Mot de passe</label>
                <input type="password" name="password" placeholder="*******" />
                <button class="mt-4">Se Connecter</button>
                <?php
                if (isset($_GET['connect']) == 'false')
                {  
                        
                    echo("<label for='mail' class='custom-control-label mt-2 mb-2'>Le mail ou le mot de passe est incorrect.</label>");
                }?>
            </form>
        </div>
    </div>
</div>