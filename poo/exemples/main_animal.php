<?php

require_once('Animal.class.php');

$lion = new Animal();
// $lion->couleur = "Jaune";
// $lion->poids = 190;
// echo "Le lion a ".$lion->poids." kg et sa couleur est: ".$lion->couleur;
$lion->setCouleur("Jaune");
$lion->setPoids(100);

echo "Le lion a la couleur: ".$lion->getCouleur(). " et son poids es de: ".$lion->getPoids()." kg";
