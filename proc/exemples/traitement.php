<?php
if(isset($_POST['soumis'])){

    $nom = $_POST["nom"];
    $age = $_POST["age"];
    $message = $_POST['message'];
    $module = $_POST['module'];
    $pays_tab = $_POST['pays'];
    $loisir = $_POST['loisir'];

    echo "Nom: $nom , Age: $age, Message: $message, Module: $module";
    echo "<ul>";
    foreach ($pays_tab as  $pays) {
        echo "<li>$pays</li>";
    }
    echo "</ul>";

    if(isset($_POST['loisir'])){

        echo"<ul>";
        foreach($loisir as $l){
            echo"<li>$l</li>";
        }
        echo"</ul>";
    }
}
//  echo "<pre>";
//  var_dump($_POST);
//  echo "</pre>";


?>