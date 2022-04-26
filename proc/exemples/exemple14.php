<?php

$ressource = fopen('fichier2.txt','w+');
if($ressource){
    fwrite($ressource, 'Hello ');
    rewind($ressource);
    fwrite($ressource, 'Je ');
    rewind($ressource);
}
?>