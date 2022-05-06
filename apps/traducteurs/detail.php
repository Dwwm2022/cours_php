<?php
require_once('./connect.php');
if($base){
    if(isset($_GET['id'])){
        $id = trim(htmlentities(addslashes($_GET['id'])));
        $sql = "SELECT * FROM personnes, langues
                WHERE personnes.id_langue = langues.id ";
        $sql2 = "SELECT * FROM personnes 
                INNER JOIN langues 
                ON personnes.id_langue = langues.id
                AND personnes.id_p = '$id'";
        $res = mysqli_query($base, $sql2);
        if($res){
            $data = mysqli_fetch_assoc($res);
            // echo"<pre>";
            // var_dump($data);
            // echo"</pre>";
        }
    }
}
?>
<?php require_once('partials/header.php'); ?>
<div class="card mb-3" style="max-width: 540px;">
    
    <div class="row g-0">
        <div class="col-md-4">
            <img src="./assets/images/<?=$data['image'];?>" alt="Trendy Pants and Shoes" class="img-fluid rounded-start" />
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Informations du traducteur</h5>
                <ul class="list-group list-group-light list-group-small">
                    <li class="list-group-item text-center text-white">
                        <ul class="list-group list-group-light">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Nom:</p>
                                    </div>
                                </div>
                                <span class="badge rounded-pill badge-primary"><?=$data['nom'];?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Prénom</p>
                                    </div>
                                </div>
                                <span class="badge rounded-pill badge-primary"><?=$data['prenom'];?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Langue</p>
                                    </div>
                                </div>
                                <span class="badge rounded-pill badge-primary"><?=$data['libelle'];?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Description:</p>
                                    </div>
                                </div>
                                <span class="badge rounded-pill badge-primary"><?=$data['description'];?></span>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<?php require_once('partials/footer.php'); ?>