<?php

require_once('Employe.class.php');
//Creation des objets employés
$employ1 = new Employe();
$employ2 = new Employe();
$employ3 = new Employe();
$tab_employes = [];
//setter les employés
$employ1->setNom("Dupond")
        ->setPrenom("Thomas")
        ->setPoste("Developpeur web")
        ->setIsCadre(true)
        ->setAdresse("02 Rue G-D Paris")
        ->setSecret(md5($employ1->getNom()));
array_push($tab_employes, $employ1);

$employ2->setNom("Tita")
        ->setPrenom("Antoine")
        ->setPoste("Manager")
        ->setIsCadre(true)
        ->setAdresse("10 Rue Carnot Yvellines")
        ->setSecret(md5($employ2->getNom()));
array_push($tab_employes, $employ2);

$employ3->setNom("Pierre")
        ->setPrenom("Simon")
        ->setPoste("Imprimeur")
        ->setIsCadre(false)
        ->setAdresse("25 Rue République Melun")
        ->setSecret(md5($employ3->getNom()));
array_push($tab_employes, $employ3);

// echo "<pre>";
// var_dump($tab_employes);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Document</title>
</head>

<body>
        <div class="container">
                <h1>Liste des employés</h1>
                <table class="table table-striped">
                        <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Poste</th>
                                <th>Cadre</th>
                                <th>Adresse</th>
                        </tr>
                        <?php foreach ($tab_employes as $empl) { ?>
                                <tr>
                                        <td><?= $empl->getNom(); ?></td>
                                        <td><?= $empl->getPrenom(); ?></td>
                                        <td><?= $empl->getPoste(); ?></td>
                                        <td><?= ($empl->getIsCadre()) ? "Cadre" : "Employé"; ?></td>
                                        <td><?= $empl->getAdresse(); ?></td>
                                </tr>
                        <?php } ?>
                </table>
        </div>
</body>

</html>