<?php ob_start();  ?>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Pays</th>
            <th>Année</th>
            <th>Image</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Disponibilité</th>
            <th>Quantité</th>
            <th>Catégory</th>
            <th>Créé le</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($vehicles as $vehicle): ?> 
        <tr>
            <td><?=$vehicle->getId_v();?></td>
            <td><?=$vehicle->getMarque();?></td>
            <td><?=$vehicle->getModele();?></td>
            <td><?=$vehicle->getCountry();?></td>
            <td><?=$vehicle->getYear();?></td>
            <td><?=$vehicle->getImage();?></td>
            <td><?=$vehicle->getDescription();?></td>
            <td><?=$vehicle->getPrice();?></td>
            <td><?php echo ($vehicle->getAvailable() ? 'Disponible': 'Indisponible') ?></td>
            <td><?=$vehicle->getQuantity();?></td>
            <td><?=$vehicle->getCategory()->getId_cat();?></td>
            <td><?=$vehicle->getDate_created_v();?></td>

        </tr>
        <?php endforeach ?>
    </tbody>
</table> 
<?php
$title = "Liste des véhicles";
$content = ob_get_clean();
require_once(dirname(dirname(__DIR__)).'/admin/template_back.php');
?>
