<?php ob_start(); //var_dump($categories); ?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Catégorie</th>
            <th>Créé le</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($categories as $category): ?> 
        <tr>
            <td><?=$category->getId_cat();?></td>
            <td><?=ucfirst($category->getNom_cat());?></td>
            <td><?=$category->date_created; ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php
$title = "Liste des catégories";
$content = ob_get_clean();
require_once(dirname(dirname(__DIR__)).'/admin/template_back.php');
?>
