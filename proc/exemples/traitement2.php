<?php
var_dump($_REQUEST);
if(isset($_GET['nom']) && isset($_GET['age'])){
    $nom = $_GET['nom'];
    $age = $_GET['age'];
    echo $nom, " ", $age;
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $libelle = $_GET['libelle'];
    echo $id, " ", $libelle;
}
if(isset($_GET['num'])){
    $num = $_GET['num'];
    if($num <= 6){
        for($i = 0; $i < $num; $i++){
            echo "Numero:".($i + 1)."<br/>";
        }
    }
    echo $_REQUEST['num'];
}
if(isset($_POST)){
    $nom = $_REQUEST['nom'];
    $age = $_REQUEST['age'];

    echo "$nom $age";
}
?>