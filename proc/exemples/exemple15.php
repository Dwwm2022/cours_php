<?php

if($pointeur = opendir('../corrections/images/.')){
   while($file = readdir($pointeur)){
       if($file != "." && $file != ".."){

           echo $file."<br/>";
       }
   } 
}
echo getcwd()."<br/>";
chdir("../corrections");
echo getcwd()."<br/>";
//mkdir('css');
//chdir("../corrections/css");
touch('style.css');
//rmdir('css');
echo getcwd()."<br/>";
chdir("../corrections");
echo getcwd()."<br/>";
//rmdir('css');
$rc = dirname(getcwd());
echo $rc;
?>