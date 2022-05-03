<?php
require_once('../../connect.php');
if ($base) {
    //requete
    $sql = "SELECT * FROM langues";
    //Exécution
    $res = mysqli_query($base, $sql);
}

?>
<?php require_once('../../partials/header.php'); ?>
<h1>La liste des langues</h1>
<table class="table table-striped">
    <thead class="thead-primary">
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
            <td><?=$row['drapeau']; ?></td>
            <td><?=$row['created']; ?></td>
            <td>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
    <?php } } ?>
    </tbody>
</table>
<?php require_once('../../partials/footer.php'); ?>