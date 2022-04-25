<?php
#ex1
$nb =  -2;
echo $nb > 0 ? "le nombre est positif":"Le nombre est négatif";
echo "<br/>";

#exo2
$moy = 6;
$msg = "";
if($moy < 8){
    $msg = "Ajourné!";
}elseif ($moy >= 8 && $moy < 10) {
    $msg = "Rattrapage!";
}elseif ($moy >= 10 && $moy < 12) {
    $msg = "Admis!";
}elseif ($moy >= 12 && $moy < 14) {
    $msg = "Assez-bien!";
}elseif ($moy >= 14 && $moy < 16) {
    $msg = "Bien!";
}else {
    $msg = "Très bien!";
}
echo $msg;
echo "<br/>";

#exo3
$sexe = ""; $age = 0;

if($sexe === "h"){
    if($age > 20){
        echo "Vous êtes imposable!";
    }else{
        echo "Vous n'êtes pas imposable!";
    }
}elseif ($sexe === "f") {
    if($age >= 18 && $age <= 35){
        echo "Vous êtes imposable!";
    }else{
        echo "Vous n'êtes pas imposable!";
    }
}
if ($sexe == "homme" && $age >= 20) {
    echo "Vous devez payer les impots";
}elseif ($sexe == "femme" && $age >= 18 && $age<=35) {
    echo "Vous devez payer les impots";
}else{
    echo "Vous ne devez pas payer";
}
echo "<br/>";

#exo1-tableaux
$tab1 = []; $tab2 = []; $tab3 = [];
for ($i=0; $i < 10 ; $i++) { 
    $tab1[$i] = $i+1;
    $tab2[$i] = $i+11;
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}
print_r($tab1); 
echo "<br/>";
print_r($tab2); 
echo "<br/>";
print_r($tab3); 
echo "<br/>";
//Deuxième solution
for ($i=1; $i < 11; $i++) { 
    array_push($tab1,$i);
}
print_r($tab1);

echo "<br/>";

for ($y=11; $y < 21; $y++) { 
    array_push($tab2,$y);
}
print_r($tab2);

echo "<br/>";

for ($a=0; $a < 10; $a++) { 
    array_push($tab3,$tab1[$a] + $tab2[$a]);
}
print_r($tab3);

echo "<br/>";
echo"*****************************";
echo "<br/>";
#exo2-tableaux
$valeurs = [];
for ($i=0; $i < 10 ; $i++) { 
    $valeurs[$i] = rand(1,100);
}
print_r($valeurs);
echo "<br/>";
sort($valeurs);
print_r($valeurs);
$valeurs_str = implode(";",$valeurs);
echo $valeurs_str;
echo "<br/>";

#exo3-tableaux
$notes = [15, 8, 12, 11, 16]; $moy = 0; $somme = 0;

for ($i=0; $i < count($notes); $i++) { 
    $somme += $notes[$i];
}
$moy = $somme/count($notes);
echo "La moyenne de notes est: $moy";
echo $moy >= 10 ? "Cet élève passe en classe supérieure": "Cet élève rédouble";
echo "<br/>";

#exo4-tableaux 1524 3048 5842
$tableau1 = [6, 25, 35, 61];
$tableau2 = [12, 24, 46];
$s = 0;
for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        $s += $tableau2[$i] * $tableau1[$j];
    }
}
echo $s;
?>