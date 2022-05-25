<?php
require_once('Personne.class.php');
require_once('Formateur.class.php');
$formateur1 = new Formateur("002", "Peter", "Quasim", "03 Rue Carnot 77000 Melun",true);
$formateur2 = new Formateur("002", "Guion", "Roger", "55 Rue Réné 78000 st-Cloud",true);

//var_dump($formateur1);
$personne1 = new Personne("004","Edmond", "Thomas","Créteil");
$personne2 = new Personne("004","Edmond", "Thomas","Créteil");
$formateur1->former($formateur1);
