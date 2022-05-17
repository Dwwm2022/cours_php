<?php

require_once('Compte.class.php');

$compte1 = new Compte("#123","Dupond", 150);
$compte2 = new Compte("#124","Durand", 500);
$tab_comptes = [];

// $compte1->setTitulaire("Dupond")
//         ->setNumero("#123")
//         ->depot(150);

// $compte2->setTitulaire("Durand")
//         ->setNumero("#124")
//         ->depot(500);

//unset($compte2);

array_push($tab_comptes, $compte1, $compte2);    
var_dump($tab_comptes);
echo "<ol>";
    foreach($tab_comptes as $compte){
        echo "<li>".$compte->getNumero()."-".$compte->getTitulaire()."-".Compte::TYPE_1."</li>";
    }
echo "</ol>";

echo Compte::getPlafond();
echo"<br/>";
echo "Nombre d'objets créés: ".Compte::getNb_obj();        