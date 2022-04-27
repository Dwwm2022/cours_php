<?php

setcookie("login","Dupond");
if(isset($_COOKIE["login"])){

    echo $_COOKIE["login"];
}
$temps = 5 * 60;
//setcookie('mdp','1234', time() + $temps);

if(isset($_COOKIE['mdp'])){
    echo "Le cookie est encore dispo";
}else{
    echo "Il est détruit";
}

?>