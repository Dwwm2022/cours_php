<?php ob_start(); //var_dump($categories); 
?>

<div class="card my-5">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="./assets/images/<?= $vehObj->getImage(); ?>" alt="Trendy Pants and Shoes" class="img-fluid rounded-start" />
            <hr>
            <?php if($vehObj->getAvailable()){ ?>
            <h3 class="text-center mt-2">Validation</h3>
            <form>
                <label for="email">Email*</label>
                <input type="email" id="email" class="form-control" placeholder="Votre email svp...">
                <label for="quant">Quantite*</label>
                <input type="number" id="quant" class="form-control" min="1" value="1" max="<?= $vehObj->getQuantity();?>">
                <input type="hidden" id="ref" value="<?= $vehObj->getId_v(); ?>">
                <input type="hidden" id="modele" value="<?= ucfirst($vehObj->getModele()); ?>">
                <input type="hidden" id="marque" value="<?= ucfirst($vehObj->getMarque());  ?>">
                <input type="hidden" id="prix" value="<?= $vehObj->getPrice(); ?>">
                <input type="hidden" id="nb" value="<?= $vehObj->getQuantity(); ?>">

                <button id="checkout-button" class="btn btn-success col-12 mt-2">
                    <i class="fab fa-cc-visa"></i> Valider
                </button>
            </form>
            <?php }else{ ?>
                <a class="btn btn-warning" href="index.php?action=order&id=<?= $vehObj->getId_v(); ?>">Commander</a>
            <?php } ?>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title"><?= ucfirst($vehObj->getMarque()); ?>-<?= ucfirst($vehObj->getModele()); ?></h3>
                <ul class="list-group list-group-light">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Pays:</div>
                        </div>
                        <span class="fw-bold"><?= ucfirst($vehObj->getCountry()); ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Prix:</div>
                        </div>
                        <span class="fw-bold badge badge-danger rounded-pill"><?= $vehObj->getPrice(); ?> €</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Quantité</div>
                        </div>
                        <span class="fw-bold badge badge-warning rounded-pill"><?= $vehObj->getQuantity(); ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Année:</div>
                        </div>
                        <span class="fw-bold badge badge-secondary rounded-pill"><?= $vehObj->getYear(); ?></span>
                    </li>
                </ul>

                <p class="fw-bold">Description:</p>
                <p class="card-text note note-primary">
                    <?= $vehObj->getDescription(); ?>
                </p>
                <p class="card-text">
                   
                </p>
            </div>
        </div>
    </div>

</div>
<?php

$content = ob_get_clean();
require_once(dirname(dirname(__DIR__)) . '/public/template_front.php');
?>