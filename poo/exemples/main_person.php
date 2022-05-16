<?php

require_once('Person.class.php');

$pers1  = new Person();//objet pers1 ou instance pers1
$pers1->nom = "Thomas";//assignation
$pers1->age = 52;

$pers2 = new Person();
$pers2->nom = "Dupond";
$pers2->age = 21;
//echo "Nom: ".$pers1->nom. " Age: ".$pers1->age."ans";
echo $pers1->affichage();
echo "<br/>";
echo $pers2->affichage();
//echo "Nom: ".$pers2->nom. " Age: ".$pers2->age."ans";

$person_tab = [$pers1, $pers2];
//var_dump($pers1);

echo"<ol>
<li>Thomas</li>
<li>Dupond</li>
</ol>";

echo"<ol>";
foreach ($person_tab as $person) {
   echo "<li>".$person->nom."</li>";
}
echo"</ol>";

echo $pers1->age ? "Vous êtes majeur" : "Vous êtes mineur";