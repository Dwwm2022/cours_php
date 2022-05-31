<?php ob_start(); //var_dump($categories); ?>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Rôles</th>
            <th>Créé le</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($roles as $role): ?> 
        <tr>
            <td><?=$role->getId_r();?></td>
            <td><?=ucfirst($role->getName_r());?></td>
            <td><?=date('d-m-Y', strtotime($role->getDate_created_r())); ?></td>
            <td>
                <a class="btn btn-success" 
                href="index.php?action=edit_cat&id=<?=$role->getId_r();?>"
                /> <i class="fa fa-edit"></i> Editer</a>
                <!-- Supprimer -->
                <a 
                class="btn btn-danger" 
                href="index.php?action=delete_cat&id=<?=$role->getId_r();?>"
                onclick="return confirm('Etes-vous sûr de supprimer ...')"
                /> <i class="fa fa-trash"></i> Supprimer</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php
$title = "Liste des roles";
$content = ob_get_clean();
require_once(dirname(dirname(__DIR__)).'/admin/template_back.php');
?>
