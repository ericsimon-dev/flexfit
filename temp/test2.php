<?php

//check if index "array" on POST is defined
if(isset($_POST["array"])){

    //write a JSON body
    echo json_encode(["message" => "Received"], JSON_FORCE_OBJECT);

}
?>