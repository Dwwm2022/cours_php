<?php
    // $x = 5;
    // function display(){
    //     global $x;
    //     echo $x;
    // }
    // display();

    //variables statiques
    function valStatic(){
        static $nb = 0;
        $nb = $nb + 1;
        echo "Page visitée $nb fois <br/>";
    }
    valStatic();
    valStatic();
    valStatic();
    //isset() empty()
    $nom = "Thomas";
    if(isset($nom)){
        echo"Il existe <br/>";
    }
    if(!empty($nom)){
        echo "Elle est non vide <br/>";
    }
    $somme = function(){
        echo "fonction anonyme <br/>";
    };
    $somme();

    echo "Id unique : ".uniqid()."<br/>";
    echo "Id unique : ".uniqid()."<br/>";
    echo "Id unique : ".uniqid()."<br/>";

    if(function_exists('valStatic')){
        echo "La fonction existe <br/>";
    }
    echo "php version ".phpversion()."<br/>";
    echo "php config ".phpinfo()."<br/>";
?>
