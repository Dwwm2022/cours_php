<?php
require_once('Calcul.php');
require_once('Facture.class.php');

$facture =  new Facture();

$ttc = $facture->CalculTTC(20);

echo $ttc;