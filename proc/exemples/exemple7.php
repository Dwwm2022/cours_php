<?php
//tableau à deux dimensions
$tab = [
    [5,2,7],
    [8,0,4],
    [4,8]
];

for ($k=0; $k < count($tab) ; $k++) { 
    $somme = 0;
    for ($i=0; $i < count($tab[$i]); $i++) { 
        $somme += $tab[$k][$i];
    }
    echo "<br/>";
    echo "Somme".$somme;
    echo " Moyenne ".$somme/count($tab[$k]);
}
?>