<?php
$donnee = file('produit.csv');
var_dump($donnee);
$tabProduits = [];
foreach($donnee as $key => $val){
   $tabProduits[$key] =  explode(";",$val);
}
echo"<pre>";
var_dump($tabProduits);
echo"</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>