<?php

$base = mysqli_connect("localhost","root","","bdd");

if($base){
    echo "connexion réussie";
}else{
    echo "Erreur enrégistrée lors de la connexion";
}
?>