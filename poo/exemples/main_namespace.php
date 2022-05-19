<?php

use \identite\Adresse as AdIdent;
require_once('Adresse.class.php');

$adresse = new AdIdent();

$adresse->setNumero(2)
        ->setRue('Michel')
        ->setCode_postal(75000)
        ->setVille('Paris');

var_dump($adresse);
