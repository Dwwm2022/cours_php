<?php
//strlen()
$nom = "dupond";
$l_nom = strlen($nom);
echo "Ce nom a pour taille $l_nom";
//substr()
$phrase = "le temps est beau";
$m = substr($phrase,9,3);
echo $m;
echo "<br/>";
//str_replace()
$email = "toto@monsite.fr";
$new_email = str_replace('fr','com',$email);
echo $new_email;
echo "<br/>";
//trim()
$prenom = " Simon  ";
echo strlen($prenom);
$prenom_trim = trim($prenom);
echo strlen($prenom_trim);
echo "<br/>";
$prenom_lower = strtolower($prenom);
$prenom_upper = strtoupper($prenom);
echo "Minuscule: $prenom_lower, Majuscule: $prenom_upper";
echo "<br/>";
echo ucfirst($nom);
echo "<br/>";
echo str_word_count($phrase);
?>