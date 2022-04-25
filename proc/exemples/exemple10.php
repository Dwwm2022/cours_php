<?php
//fonctions
$tab_noms = ["Lucas", "Adrien", "Lee", "Vighen", "Fatima"];
function salutation($nom){
    echo "Hello $nom";
}
salutation("Dupond");
echo "<br/>";
echo "<ol>";
foreach($tab_noms as $tn){
    echo "<li>";
    salutation($tn);
    echo "</li>";
}
echo "</ol>";

function carre($a){
    return $a*$a;
}
$x =  carre(3) + 15;
function calcul_tva($ht){
    //$ttc = $ht + 20%*$ht;
    return 1.2*$ht;
}

$prix_aff = calcul_tva(10) - 0.1*calcul_tva(10);
echo $prix_aff;
echo "<br/>";
$z = 10;
function fscope(){
    global $y;
    $y = 2;//locale
    
}
fscope();
echo $y;
?>