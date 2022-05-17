<?php

require_once('Compte.class.php');

$compte1 = new Compte("#123","Dupond",150);
$compte2 = new Compte("#124","Durand", 500);
$tab_comptes = [];

// $compte1->setTitulaire("Dupond")
//         ->setNumero("#123")
//         ->depot(150);

// $compte2->setTitulaire("Durand")
//         ->setNumero("#124")
//         ->depot(500);


array_push($tab_comptes, $compte1, $compte2);    

var_dump($tab_comptes);
        