<?php
require_once('Personne.class.php');
require_once('Formateur.class.php');
$formateur1 = new Formateur("002", "Peter", "Quasim", "03 Rue Carnot 77000 Melun",true);

$personne1 = new Personne("003","Antoinette", "Cathy", "Paris");
$personne_enseigne = new Personne("004","Edouard", "Simon", "Paris");
$formateur1->former($personne_enseigne);

