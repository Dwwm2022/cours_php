<?php

require_once('Animal.class.php');

$poisson1 = new Animal();
$poisson2 = new Animal();

$poisson1->setCouleur("Gris")
         ->setPoids(10);

$poisson2->setCouleur("Rouge")
         ->setPoids(7);

echo "Le poids du poisson1 est: ".$poisson1->getPoids()."kg <br/>";
echo "Le poids du poisson2 est: ".$poisson2->getPoids()."kg <br/>";

$poisson1->manger_animal($poisson2);
echo "Le poids du poisson1 est: ".$poisson1->getPoids()."kg <br/>";
echo "Le poids du poisson2 est: ".$poisson2->getPoids()."kg <br/>";