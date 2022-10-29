<?php
    // include 'database.php';
    $part=$_POST['part'];
    $sql = "INSERT INTO `partenaire`(`nom`) VALUES ('FlexFit Montcuq')";
    if (mysqli_query($bdd, $sql)) {
        echo json_encode(array("statusCode"=>200));
    } 
    else {
        echo json_encode(array("statusCode"=>201));
    }
    mysqli_close($bdd);