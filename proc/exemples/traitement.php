<?php
if(isset($_POST['soumis'])){

    $nom = $_POST["nom"];
    $age = $_POST["age"];
    $message = $_POST['message'];
    $module = $_POST['module'];
    $pays_tab = $_POST['pays'];
    $loisir = $_POST['loisir'];
    $marque = $_POST['marque'];
    $genre = $_POST['genre'];
    $secret = $_POST['secret'];

    echo "Nom: $nom , Age: $age, Message: $message, Module: $module, Genre: $genre, Secret: $secret";
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

    if(isset($_POST['marque'])){

        echo"<ol>";
        foreach($marque as $k => $m){
            //eval($k);
            echo"<li>".str_replace(['"',"'"], "", $k)."</li>";
        }
        echo"</ol>";
    }
    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";
    $chemin = 'images/';
    move_uploaded_file($_FILES['image']['tmp_name'],$chemin.$_FILES['image']['name']);
}


?>