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
            <th>Catégorie</th>
            <th>Créé le</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($vehicles as $vehicle): ?> 
        <tr>
            <td><?= $vehicle->getId_v();?></td>
            <td><?= ucfirst($vehicle->getMarque());?></td>
            <td><?= ucfirst($vehicle->getModele());?></td>
            <td><?= ucfirst($vehicle->getCountry());?></td>
            <td><?= $vehicle->getYear();?></td>
            <td><img src="./assets/images/<?= $vehicle->getImage();?>" alt="" width="100"/></td>
            <td><?= ucfirst(substr($vehicle->getDescription(), 0, 30)) . ' ...'; ?></td>
            <td><?= $vehicle->getPrice();?>€</td>
            <td><?= $vehicle->getAvailable() ? '<i class="text-success fa fa-check"></i>': '<i class="text-danger fa fa-times" aria-hidden="true"></i>' ?></td>
            <td><?= $vehicle->getQuantity();?></td>
            <td><?= ucfirst($vehicle->getCategory()->getNom_cat());?></td>
            <td><?= date('d-m-Y',strtotime($vehicle->getDate_created_v()));?></td>
            <td>
                <a class="btn btn-success" 
                href="index.php?action=edit_cat&id="
                /> <i class="fa fa-edit"></i> Editer</a>
                <!-- Supprimer -->
            </td>
            <td>
                <a 
                class="btn btn-danger" 
                href="index.php?action=delete_veh&id=<?= $vehicle->getId_v();?>"
                onclick="return confirm('Etes-vous sûr de supprimer ...')"
                /> <i class="fa fa-trash"></i> Supprimer</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table> 
<?php
$title = "Liste des véhicules";
$content = ob_get_clean();
require_once(dirname(dirname(__DIR__)).'/admin/template_back.php');
?>
