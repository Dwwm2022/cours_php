<?php
require_once('../../security/auth.php');
require_once('../../connect.php');
if ($base) {
    //requete
    $sql = "SELECT * FROM langues";
    //Exécution
    $res = mysqli_query($base, $sql);
}

?>
<?php require_once('../../partials/header.php'); ?>
<h1 class="display-6">La liste des langues</h1>
<div class="text-end mb-2">
    <a href="add_l.php" class="btn btn-secondary"><i class="fas fa-plus"></i> Ajouter</a>
    <a href="../personnes/list_p.php" class="btn btn-info"><i class="fas fa-users"></i></a>
</div>
<table class="table table-striped text-center">
    <thead class="bg-light table-primary">
        <tr>
            <th>Id</th>
            <th>Libellé</th>
            <th>Drapeau</th>
            <th>Créé le</th>
            <th colspan="2" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        if($res){ 
            while($row = mysqli_fetch_assoc($res)){
     ?>
        <tr>
            <td><?=$row['id'] ;?></td>
            <td><?=$row['libelle']; ?></td>
            <td><img src="../../assets/images/<?=$row['drapeau']; ?>" alt="" width="50" /></td>
            <td><?=$row['created']; ?></td>
            <td>
                <a href="" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Supprimer</a>
            </td>
        </tr>
    <?php } } ?>
    </tbody>
</table>
<?php require_once('../../partials/footer.php'); ?>