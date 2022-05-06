<?php
require_once('./connect.php');
if($base){
    $sql = "SELECT * FROM personnes, langues
            WHERE personnes.id_langue = langues.id";
    $sql2 = "SELECT * FROM personnes 
            INNER JOIN langues 
            ON personnes.id_langue = langues.id";
    $res = mysqli_query($base, $sql);
}
?>
<?php require_once('partials/header.php'); ?>
<div class="row my-3">
    <h1 class="text-center">Traducteurs-Pro</h1>
    <div class="col-9">
        <div class="row">
            <?php if($res){while($data = mysqli_fetch_assoc($res)){ ?>
            <div class="col-sm-6 my-2">
                <div class="card">
                    <div class="card-header">
                        <img class="img-fluid img-thumbnail" src="./assets/images/<?=$data['image'];?>" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Mr/Mme <?=ucfirst($data['prenom']);?> <?=strtoupper($data['nom']);?></h5>
                        <p class="card-text"><?=$data['description'];?></p>
                        <a href="detail.php?id=<?=$data['id_p'];?>" class="btn btn-primary">Plus!</a>
                    </div>
                </div>
            </div>
            <?php }} ?>
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
                <li class="list-group-item"><a href="" class="btn btn-info btn-block">Inscrivez-vous</a></li>
                <li class="list-group-item bg-info text-center text-white">Langues
                    <ul class="list-group list-group-light">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Français</p>
                                </div>
                            </div>
                            <span class="badge rounded-pill badge-primary">3</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Anglais</p>
                                </div>
                            </div>
                            <span class="badge rounded-pill badge-primary">3</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Espagnol</p>
                                </div>
                            </div>
                            <span class="badge rounded-pill badge-primary">2</span>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
    </div>
</div>
<?php require_once('partials/footer.php'); ?>