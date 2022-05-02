<?php

if(isset($_POST['soumis'])){
    extract($_POST);

    echo "$nom, $prenom, $mdp, $genre, $ville, $activite, $animal";
}


?>