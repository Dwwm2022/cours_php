<?php

$ressource = fopen('fichier2.txt','r+');
if($ressource){
    fwrite($ressource, 'Hello ');
    fwrite($ressource, 'Vighen ');
    rewind($ressource);
    fwrite($ressource, 'Je suis au début ');
}
?>