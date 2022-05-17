<?php

function divide($a, $b){
    if($b == 0){
        //lancement de l'exception
        throw new Exception("Division par zéro est interdite");
        
    }
    return $a/$b;
}

//teste

try {
    echo divide(5,2);
} catch (Exception $e) {
    //Récupération du message d'exception. 
    echo $e->getMessage();
}