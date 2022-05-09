<?php
require_once('./connect.php');
if ($base) {
    $errMsg = ""; $res2="";
    if (isset($_GET['id'])) {
        $id = trim(htmlentities(addslashes($_GET['id'])));
        $sql = "SELECT * FROM personnes 
        INNER JOIN langues 
        ON personnes.id_langue = langues.id
        AND langues.id='$id'
        ORDER BY id_p DESC";
    } elseif (isset($_GET['search'])) {
        $search = trim(htmlentities(addslashes($_GET['search'])));
        $sql = "SELECT * FROM personnes
        INNER JOIN langues 
        ON personnes.id_langue = langues.id 
        AND nom  LIKE '$search%' ORDER BY id_p DESC";
    } elseif (isset($_POST['soumis'])) {
        require_once('partials/send_mail.php');
    } else {
        $sql = "SELECT * FROM personnes, langues
                WHERE personnes.id_langue = langues.id
                ORDER BY id_p DESC";
    }
    $res = mysqli_query($base, $sql);

    $sql2 = "SELECT COUNT(id_langue)  AS num, id, libelle, drapeau, image FROM personnes 
                INNER JOIN langues 
                ON personnes.id_langue = langues.id
                GROUP BY id_langue";
        $res2 = mysqli_query($base, $sql2);

        $sql3 = "SELECT * FROM langues";
        $res3 = mysqli_query($base, $sql3);
  
}
?>
<?php require_once('partials/header.php'); ?>
<div class="bg-dark p-5 ">
    <h1 class="text-center title">Traducteurs-Pro</h1>
</div>
<div class="row my-3">
    <div class="col-9">
        <div class="row">
            <?php if ($res) {
                while ($data = mysqli_fetch_assoc($res)) { ?>
                    <div class="col-sm-6 my-2">
                        <div class="card">
                            <div class="card-header">
                                <img class="img-fluid img-thumbnail" src="./assets/images/<?= $data['image']; ?>" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Mr/Mme <?= ucfirst($data['prenom']); ?> <?= strtoupper($data['nom']); ?></h5>
                                <p class="card-text note note-primary"><?= substr($data['description'], 0, 120) . ' ...'; ?></p>
                                <a href="detail.php?id=<?= $data['id_p']; ?>" class="btn btn-primary"><i class="fas fa-info-circle"></i> Plus!</a>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
    <div class="col-3">
        <div class="col-12">
            <ul class="list-group list-group-light list-group-small">
                <li class="list-group-item">
                    <form method="get" action="<?php $_SERVER['PHP_SELF'] ?>" class="row row-cols-lg-auto g-3 align-items-center">
                        <div class="col-12">
                            <div class="input-group">
                                <input type="search" class="form-control" id="search" name="search" placeholder="Rechercher..." />
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-info"> <i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </li>
                <li class="list-group-item">
                    <?php require_once('partials/form_modal.php'); ?>
                </li>
                </li>
                <li class="list-group-item bg-info text-center text-white">Langues
                    <ul class="list-group list-group-light">
                        <?php if ($res2) {
                            while ($line = mysqli_fetch_assoc($res2)) { ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/images/<?= $line['drapeau']; ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                        <div class="ms-3">
                                            <form method="get" action="<?php $_SERVER['PHP_SELF'] ?>" class="row row-cols-lg-auto g-3 align-items-center">
                                                <div class="col-12">
                                                    <div class="input-group">
                                                        <input type="hidden" class="form-control" id="search" name="id" value="<?= $line['id']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-outline-light text-dark">
                                                        <p class="fw-bold mb-1"><?= ucfirst($line['libelle']); ?></p>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <span class="badge rounded-pill badge-primary"><?= $line['num']; ?></span>
                            <?php }
                        } ?>
                    </ul>
                </li>

            </ul>

        </div>
    </div>
</div>

<?php require_once('partials/footer.php'); ?>