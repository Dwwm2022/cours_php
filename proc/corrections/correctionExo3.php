<?php
//Exo1
function ajoutVue(){
    $fichier = 'compteur1.txt';
    // on verifie si le fichier compteur1.txt existe, si il existe on incrémente.
    if(file_exists($fichier)){
        //si le fichier existe on incrémente
        $compteur = (int)file_get_contents($fichier);
        $compteur++;
        file_put_contents($fichier, $compteur);

    }
}

ajoutVue();

function nombre_vues (){
    $fichier = 'compteur1.txt';
    return file_get_contents($fichier);
}

echo 'il y a '.nombre_vues().' vues sur la page Web';


if(file_exists("compteur.txt")){
    $monfichier = fopen("compteur.txt", "r+");
}else{
    $monfichier = fopen("compteur.txt", "w");
}

$vues = (int)fgets($monfichier);
$vues ++;

//fseek($monfichier, 0); // on remet le curseur a l'indice 0 du fichier
rewind($monfichier);
fputs($monfichier, $vues);
fclose($monfichier);

echo "<p> Cette page a été vue ". $vues;

#Exo2

if(!file_exists('fileImg.txt')){ 
    mkdir('archives');
    $imgs = 'images/';  

$ressource = scandir($imgs,1); 

var_dump($ressource); // nous retourne un tableau maladroit car les points sont comptés comme une entrée...

$ressource = array_diff(scandir($imgs,1),array('..','.')); //  array_diff permet d'exclure un certain nombre d'elements d'un tableau
var_dump($ressource);

$tailleImage1 = getImageSize('images/'.$ressource[0]);

echo '<br/><br/>';
var_dump($tailleImage1);

// on copie les proprietes nom,largeur, hauteur des images dans un fichier txt:

foreach($ressource as $resImg){
    $tailleImg = getImageSize('images/'.$resImg);
    $file = fopen('fileImg.txt','a'); //w => ecriture en ecransant, a => ajout, r => lecture
    fwrite($file, "Le nom du fichier : ".$resImg." sa largeur est : ".$tailleImg[0]." sa hauteur est : ".$tailleImg[1]."\r\n"); // \r est le retour a la ligne en txt et \n pour bien disposer // on ecrit dans ce fichier
    fclose($file);

    copy('images/'.$resImg, 'archives/'.$resImg);
}

}

?>