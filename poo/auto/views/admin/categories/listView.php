<?php ob_start(); //var_dump($categories); ?>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Catégorie</th>
            <th>Créé le</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($categories as $category): ?> 
        <tr>
            <td><?=$category->getId_cat();?></td>
            <td><?=ucfirst($category->getNom_cat());?></td>
            <td><?=date('d-m-Y', strtotime($category->date_created)); ?></td>
            <td>
                <a class="btn btn-success" 
                href="index.php?action=edit_cat&id=<?=$category->getId_cat();?>"
                /> <i class="fa fa-edit"></i> Editer</a>
                <!-- Supprimer -->
                <a 
                class="btn btn-danger" 
                href="index.php?action=delete_cat&id=<?=$category->getId_cat();?>"
                onclick="return confirm('Etes-vous sûr de supprimer ...')"
                /> <i class="fa fa-trash"></i> Supprimer</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php
$title = "Liste des catégories";
$content = ob_get_clean();
require_once(dirname(dirname(__DIR__)).'/admin/template_back.php');
?>
