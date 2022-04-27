<?php
if(isset($_POST['soumis'])){

    $nom = $_POST["nom"];
    $age = $_POST["age"];
    $message = $_POST['message'];
    $module = $_POST['module'];
    echo "Nom: $nom , Age: $age, Message: $message, Module: $module";
}
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";


?>