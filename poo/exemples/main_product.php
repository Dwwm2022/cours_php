<?php
require_once('Product.class.php');

$p1 = new Product("1234",15.50,"Les t-shirt de l'été");

$p1->price = 20;
echo $p1->price;
echo "<br/>";
echo $p1;