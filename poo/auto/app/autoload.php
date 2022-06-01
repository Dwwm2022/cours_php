<?php

function loading($class){
    $tabFiles = [
        "./models/$class.php",
        "./models/admin/$class.php",
        "./controllers/admin/$class.php",
        "./models/public/$class.php",
        "./controllers/public/$class.php",
    ];
    foreach($tabFiles as $file){
        if(file_exists($file)){
            require_once $file;
        }
    }
}

spl_autoload_register('loading');