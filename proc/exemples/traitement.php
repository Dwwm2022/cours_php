<?php
if(isset($_POST['soumis'])){

    $nom = $_POST["nom"];
    $age = $_POST["age"];
    $message = $_POST['message'];
    echo "Nom: $nom , Age: $age, Message: $message";
}
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";


?>