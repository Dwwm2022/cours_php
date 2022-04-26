<?php
// //file_get_contents()
// $content = file_get_contents('fichier.txt');
// echo $content."<br/>";
// //readfile()
// $nb_c = readfile('fichier.txt');
// echo $nb_c." caractères <br/>";
// //file
// $content_array = file('fichier.txt');
// var_dump($content_array);
// echo"<ul>";
// foreach($content_array as $ca){
//     echo"<li>$ca</li>";
// }
// echo"</ul>";
// //file_put_contents();
// $contenu = "Hello world!";
// file_put_contents("fichier.txt", $contenu);
/**
 * fopen(), fgetc()
 * r: lecture seule
 * r+: lecture et écriture
 * w: ecriture seule
 * w+: ecriture et lecture
 * a: ajout en ecriture
 * a+: ajout lecture et ecriture
 */
//fgetc() caractère par caractère
 //$ressource = fopen('fichier.txt','r');
//  if(!$ressource){
//      echo "impossible de traiter ce ficher";
//  }
//  while(false !==($carac = fgetc($ressource))){
//      echo $carac;
//  }
 
 echo "<br/>";
 //fgets() ligne par ligne
//  if($ressource){
//      while(!feof($ressource)){
//          $data = fgets($ressource, 100);
//          echo $data."<br/>";
//      }
//  }
 //fread() fichier en entier
//  if($ressource){
//      $data2 = fread($ressource, 200);
//      echo $data2;
//  }
//  //fwrite(); fputs()
$ressource = fopen('fichier.txt','a');
if($ressource){
    // fwrite($ressource,"Bonjour Adrien".PHP_EOL);
    // fwrite($ressource,"Bonjour Lucas");
    fwrite($ressource, "Ajout de texte");
}
 fclose($ressource);
?>