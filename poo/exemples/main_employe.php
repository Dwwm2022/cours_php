<?php

require_once('Employe.class.php');
//Creation des objets employés
$employ1 = new Employe();
$employ2 = new Employe();
$employ3 = new Employe();
$tab_employes = [];
//setter les employés
$employ1->setNom("Dupond")
        ->setPrenom("Thomas")
        ->setPoste("Developpeur web")
        ->setIsCadre(true)
        ->setAdresse("02 Rue G-D Paris")
        ->setSecret(md5($employ1->getNom()));
array_push($tab_employes, $employ1);

$employ2->setNom("Tita")
        ->setPrenom("Antoine")
        ->setPoste("Manager")
        ->setIsCadre(true)
        ->setAdresse("10 Rue Carnot Yvellines")
        ->setSecret(md5($employ2->getNom()));
array_push($tab_employes, $employ2);

$employ3->setNom("Pierre")
        ->setPrenom("Simon")
        ->setPoste("Imprimeur")
        ->setIsCadre(false)
        ->setAdresse("25 Rue République Melun")
        ->setSecret(md5($employ3->getNom()));
array_push($tab_employes, $employ3);

echo "<pre>";
var_dump($tab_employes);
echo "</pre>";
