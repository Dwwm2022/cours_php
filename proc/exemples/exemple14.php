<?php

// $ressource = fopen('fichier2.txt','w+');
// if($ressource){
//     fwrite($ressource, 'Hello ');
//     rewind($ressource);
//     fwrite($ressource, 'Je ');
//     rewind($ressource);
// }
//copy(), rename()
//copy("produit.csv", "product.csv");
//touch('test.html');
if(file_exists('test.html')){

    unlink('test.html');
}
echo filesize('fichier2.txt');

rename("fichier.txt", "fichierRename.txt");

?>