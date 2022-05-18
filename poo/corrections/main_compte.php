<?php

require_once('Compte.class.php');

$c1 = new Compte("#125","Peter", 100);
$c2 = new Compte("#126","Candide", 200);

echo "Numero: ".$c1->getNumero()." Titulaire: ".$c1->getTitulaire()." Solde: ".$c1->getSolde()."<br/>";
echo "Numero: ".$c2->getNumero()." Titulaire: ".$c2->getTitulaire()." Solde: ".$c2->getSolde()."<br/>";
echo "*********************************************************************** <br/>";
$c1->depot(800);
echo "Numero: ".$c1->getNumero()." Titulaire: ".$c1->getTitulaire()." Solde: ".$c1->getSolde()."<br/>";
echo "*********************************************************************** <br/>";
$c1->virement(200,$c2);
echo "Numero: ".$c1->getNumero()." Titulaire: ".$c1->getTitulaire()." Solde: ".$c1->getSolde()."<br/>";
echo "Numero: ".$c2->getNumero()." Titulaire: ".$c2->getTitulaire()." Solde: ".$c2->getSolde()."<br/>";