<?php
 $presidents = [
    ['id'=>1,'nom'=>'Macron','prenom'=>'emmanuel', "age"=>25, "image"=>"macron.jpg"],
    ['id'=>2,'nom'=>'Hollande','prenom'=>'François', "age"=>51, "image"=>"hollande.jpeg"],
    ['id'=>3,'nom'=>'Sarkozy','prenom'=>'Nicolas', "age"=>18, "image"=>"sarkozy.jpg"],
    ['id'=>4,'nom'=>'Chirac','prenom'=>'Jacques', "age"=>28, "image"=>"chirac.jpg"]
];
$tabBannieres = array(
    1 => array('https://www.bfmtv.com/','https://via.placeholder.com/1250x150/FF0000/FFFFFF?Text=Down.comC/O https://placeholder.com/','Description 1'),
    2 => array('https://www.6play.fr/','https://via.placeholder.com/1250x150/0000FF/808080?Text=Digital.comC/O https://placeholder.com/','Description 2'),
    3 => array('https://www.tf1.fr/','https://via.placeholder.com/1250x150/FFFF00/000000?Text=WebsiteBuilders.comC/O https://placeholder.com/','Description 3')
);

$aleatoire = array_rand($tabBannieres);
echo '<a href="'.$tabBannieres[$aleatoire][0].'">';
    echo '<img src="'.$tabBannieres[$aleatoire][1].'" title="'.$tabBannieres[$aleatoire][2].'" alt="" />';
echo'</a>';
?>
<?php
 $a  = 5;
// echo $a;
?>
<?=$a;?>
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
        <table class="table tabe-striped">
            <thead class="thead-dark">
                <tr>
                    <?php foreach($presidents[0] as $key => $val){ ?>
                    <th><?=ucfirst($key);?></th>
                    <?php } ?>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($presidents as $president){?>
                <tr>
                
                    <td><?=$president['id'];?></td>
                    <td><?=$president['nom'];?></td>
                    <td><?=$president['prenom'];?></td>
                    <td><?=$president['age'];?></td>
                    <td><img src="images/<?=$president['image'];?>" width="50" alt="" /></td>
                    
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>