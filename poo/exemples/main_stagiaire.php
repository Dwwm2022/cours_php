<?php
require_once('Personne.class.php');
require_once('Stagiaire.class.php');
$stag1 = new Stagiaire(6, true);
$stag1->setIdentifiant("001")
      ->setNom("Dupond")
      ->setPrenom("Antoine")
      ->setAdresse("02 Rue du G.d 75000 Paris");

//var_dump($stag1);
echo $stag1->affichage();