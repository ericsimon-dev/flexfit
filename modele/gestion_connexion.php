<?php
session_start();  // démarrage d'une session
include_once('connexion_bdd.php');

if (isset($_POST['mail'])){
    
  $username = stripslashes($_REQUEST['mail']);
  $username = mysqli_real_escape_string($bdd, $username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($bdd, $password);
  $query = "SELECT * FROM `utilisateur` WHERE email='$username' and motdepasse='".hash('sha256', $password)."'";
  $result = mysqli_query($bdd,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
    

      $_SESSION['mail'] = $username;
      header("Location: ../index.php");
      
  }else{
    
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    header("Location: ../index.php?section=connexion&connect=false");
    echo($query);
  }
}
?>