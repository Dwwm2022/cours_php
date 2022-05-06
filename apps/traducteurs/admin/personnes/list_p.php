<?php
require_once('../../security/auth.php');
require_once('../../connect.php');
if ($base) {
    if (isset($_GET['search'])) {
        $search = trim(htmlspecialchars(addslashes($_GET['search'])));
        $sql = "SELECT * FROM personnes WHERE nom  LIKE '$search%' ORDER BY id_p DESC";
    } else {
        $sql = "SELECT * FROM personnes ORDER BY id_p DESC";
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
                <input type="search" class="form-control" id="search" name="search" placeholder="Rechercher..." />
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </div>
    </form>
</div>
<div class="text-end">
    <a href="add_p.php" class="btn btn-secondary">Ajouter</a>
    <a href="../langues/list_l.php" class="btn btn-info"><i class="fas fa-language"></i></a>
</div>
<table class="table table-striped">
    <thead class="bg-light table-primary">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Image</th>
            <th>Langue</th>
            <?php if($_SESSION['user']['role'] == 1){?>
            <th colspan="3" class="text-center">Actions</th>
            <?php } ?>
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
                    <?php if($_SESSION['user']['role'] == 1){?>
                    <td>
                        <a href="detail_p.php?id=<?= $line['id_p']; ?>&libelle=<?= $row['libelle']; ?>" class="btn btn-info">Détail</a>
                        <a href="edit_p.php?id=<?= $line['id_p']; ?>" class="btn btn-warning">Editer</a>
                        <a onclick="return confirm('Etes vous sûr ...');" href="delete_p.php?id=<?= $line['id_p']; ?>" class="btn btn-danger">Supprimer</a>
                    </td>
                    <?php } ?>
                </tr>
        <?php }
        } ?>
    </tbody>
</table>
<?php require_once('../../partials/footer.php'); ?>