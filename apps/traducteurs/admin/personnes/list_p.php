<?php
require_once('../../connect.php');
if ($base) {
    if(isset($_GET['search'])){
        $search = trim(htmlspecialchars(addslashes($_GET['search'])));
        $sql = "SELECT * FROM personnes WHERE nom  LIKE '$search%'";
    }else{
        $sql = "SELECT * FROM personnes";
    }
    $res = mysqli_query($base, $sql);
}

?>
<?php require_once('../../partials/header.php'); ?>
<h1>La liste des personnes</h1>
<div class="col-8 offset-4">
    <form method="get" action="<?php $_SERVER['PHP_SELF'] ?>" class="row row-cols-lg-auto g-3 align-items-center">
        <div class="col-12">
            <div class="input-group">
                <input  type="search" class="form-control" id="search" name="search" placeholder="Rechercher..." />
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </div>
    </form>
</div>
<div class="text-end">
    <a href="add_p.php" class="btn btn-secondary">Ajouter</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Image</th>
            <th>Langue</th>
            <th colspan="3" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($res) {
            while ($line = mysqli_fetch_assoc($res)) {
                $sql = "SELECT * FROM langues WHERE id = " . $line['id_langue'];
                $res2 = mysqli_query($base, $sql);
                $res2 ? $row = mysqli_fetch_assoc($res2) : $error = "erreur";
                if (isset($error)) {
                    echo $error;
                }
                // var_dump($row);
        ?>
                <tr>
                    <td><?= $line['nom']; ?></td>
                    <td><?= $line['prenom']; ?></td>
                    <td><?= $line['age']; ?></td>
                    <td><?= $line['telephone']; ?></td>
                    <td><?= $line['email']; ?></td>
                    <td><img src="../../assets/images/<?= $line['image']; ?>" alt="" width="80" /> </td>
                    <!-- <td><?= $line['id_langue']; ?></td> -->
                    <td><?= $row['libelle']; ?></td>

                    <td>
                        <a href="" class="btn btn-info">Détail</a>
                        <a href="" class="btn btn-warning">Editer</a>
                        <a href="" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
        <?php }
        } ?>
    </tbody>
</table>
<?php require_once('../../partials/footer.php'); ?>