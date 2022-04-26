<?php 

$donnee = file('produit.csv');
var_dump($donnee);
$tabproduit = [];
foreach($donnee as $key => $value){
    $tabproduit[$key] = explode(';', $value);
}
echo "<pre>";
var_dump($tabproduit);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <?php foreach($tabproduit[0] as $val){ ?>
                    <th><?=$val;?></th>
                    <?php } unset($tabproduit[0]);?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($tabproduit as $tab){?>
                <tr>
                    <td><?=$tab[0];?></td>
                    <td><?=$tab[1];?></td>
                    <td><?=$tab[2];?></td>
                    <td><?=$tab[3];?></td>
                    
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>