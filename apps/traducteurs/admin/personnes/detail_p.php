<?php
require_once('../../security/auth.php');
require_once('../../connect.php');
if (isset($_GET['id']) && isset($_GET['libelle'])) {
    $id = trim(htmlentities(addslashes($_GET['id'])));
    $libelle = trim(htmlentities(addslashes($_GET['libelle'])));
    if ($base) {
        $sql = "SELECT * FROM personnes WHERE id_p = " . $id;
        $res = mysqli_query($base, $sql);
        $res ? $data = mysqli_fetch_assoc($res) : "";
    }
}

?>
<?php require_once('../../partials/header.php') ?>
<div class="text-end">
    <a href="list_p.php">
        <i class="fas fa-list-alt text-primary fa-3x"></i>
    </a>
</div>
<div class="col-6 offset-3 my-5">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="../../assets/images/<?= $data['image']; ?>" alt="Trendy Pants and Shoes" class="img-fluid rounded-start" />
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Traducteur de N° 000<?= $data['id_p']; ?></h5>
                    <ul class="list-group list-group-light list-group-small">
                        <li class="list-group-item px-3"><b>Nom: </b> <?= $data['nom']; ?></li>
                        <li class="list-group-item px-3"><b>Prénom: </b> <?= $data['prenom']; ?></li>
                        <li class="list-group-item px-3"><b>Age: </b> <?= $data['age']; ?></li>
                        <li class="list-group-item px-3"><b>Email: </b> <?= $data['email']; ?></li>
                        <li class="list-group-item px-3"><b>Téléphone: </b> <?= $data['telephone']; ?></li>
                        <li class="list-group-item px-3"><b>Langue: </b> <?= ucfirst($libelle); ?></li>

                    </ul>
                    <p class="card-text">
                        <?= $data['description']; ?>
                    </p>
                    <p class="card-text">
                        <small class="text-muted"><b>Créé le:</b> <?= date('d/m/Y', strtotime($data['created'])); ?></small>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
<?php require_once('../../partials/footer.php') ?>