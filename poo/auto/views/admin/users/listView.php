<?php ob_start(); //var_dump($categories); ?>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Statut</th>
            <th>Rôle</th>
            <th>Créé le</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?> 
        <tr>
            <td><?=$user->getId_u();?></td>
            <td><?=ucfirst($user->getLastname());?></td>
            <td><?=ucfirst($user->getFirstname());?></td>
            <td><?=ucfirst($user->getEmail());?></td>
            <td><?=$user->getStatus() ? '<b class="text-success">Actif</b>':'<b class="text-danger">Désactivé</b>';?></td>
            <td><?= ucfirst($user->getRole()->getName_r());?></td>
            <td><?=date('d-m-Y', strtotime($user->getDate_created_u())); ?></td>
            <td>
                <?php
                echo($user->getStatus())
                ? "<a class='btn btn-success' 
                    href='index.php?action=list_u&id=".$user->getId_u()."&status=".$user->getStatus()."'
                     /> <i class='fa fa-unlock'></i> Activé</a>"
                : "<a class='btn btn-warning' 
                href='index.php?action=list_u&id=".$user->getId_u()."&status=".$user->getStatus()."'
                 /> <i class='fa fa-lock'></i> Désactivé</a>"

                 ?>

                <a class="btn btn-primary" 
                href="index.php?action=edit_cat&id=<?=$user->getId_u();?>"
                /> <i class="fa fa-edit"></i> Editer</a>
                <!-- Supprimer -->
                <a 
                class="btn btn-danger" 
                href="index.php?action=delete_cat&id=<?=$user->getId_u();?>"
                onclick="return confirm('Etes-vous sûr de supprimer ...')"
                /> <i class="fa fa-trash"></i> Supprimer</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php
$title = "Liste des utilisateurs";
$content = ob_get_clean();
require_once(dirname(dirname(__DIR__)).'/admin/template_back.php');
?>