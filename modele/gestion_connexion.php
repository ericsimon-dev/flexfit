<?php
session_start();  // démarrage d'une session

// on vérifie que les données du formulaire sont présentes
if (isset($_POST['mail']) && isset($_POST['password'])) {

    // // cette requête permet de récupérer l'utilisateur depuis la BD
    // $bdd->$requete = "SELECT * FROM `utilisateur` WHERE email=? AND motdepasse=?";
    // $bdd->execute($requete);
    // $login = $_POST['mail'];
    // $mdp = $_POST['password'];

    $sql="SELECT * FROM `utilisateur` WHERE email=? AND motdepasse=?";
	if(!$connexion->query($sql))
		echo "Pb de requete";
	else{
    echo "c ok";
}
    if ($resultat->rowCount() == 1) {
        // l'utilisateur existe dans la table
        // on ajoute ses infos en tant que variables de session
        
        $_SESSION['mail'] = $login;
        $_SESSION['password'] = $mdp;
        // cette variable indique que l'authentification a réussi
        $authOK = true;
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Résultat de l'authentification</title>
</head>
<body>
    <h1>Résultat de l'authentification</h1>
    <?php
    echo $requete;
    if (isset($authOK)) {
        echo "<p>Vous avez été reconnu(e) en tant que " . ($login) . "</p>";
        echo '<a href="index.php">Poursuivre vers la page d\'accueil</a>';
    }
    else { ?>
        <p>Vous n'avez pas été reconnu(e)</p>
        <p><a href="login.php">Nouvel essai</p>
    <?php } ?>
</body>
</html>