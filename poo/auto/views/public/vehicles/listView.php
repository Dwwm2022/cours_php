<?php ob_start(); //var_dump($categories); 
?>
<!-- Jumbotron -->
<div class="p-5 text-center bg-light">
    <h1 class="mb-3">Liste des véhicules</h1>
    <h4 class="mb-3">Se déplacer en sécurité et moins cher</h4>
    <a class="btn btn-primary" href="" role="button">Call to action</a>
</div>
<!-- Jumbotron -->
<div class="input-group my-3 offset-5">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="row">
            <div class="col-10">
                <div class="form-outline">
                    <input type="search" id="search" name="search" class="form-control border" />
                    <label class="form-label" for="search">Rechercher</label>
                </div>
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary" name="soumis">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($vehicles as $vehicle) : ?>
        <div class="col-4">
            <div class="card h-100">
                <img src="./assets/images/<?= $vehicle->getImage(); ?>" alt="" class="card-img-top" />
                <div class="card-body">
                    <h3 class="card-title text-center"><?= ucfirst($vehicle->getMarque()); ?>-<?= ucfirst($vehicle->getModele()); ?></h3>
                    <ul class="list-group list-group-light">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Pays:</div>
                            </div>
                            <span class="fw-bold"><?= ucfirst($vehicle->getCountry()); ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Prix:</div>
                            </div>
                            <span class="fw-bold badge badge-danger rounded-pill"><?= $vehicle->getPrice(); ?> €</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Quantité</div>
                            </div>
                            <span class="fw-bold badge badge-warning rounded-pill"><?= $vehicle->getQuantity(); ?></span>
                        </li>
                    </ul>

                </div>
                <div class="card-footer text-end">
                    <a href="index.php?action=show&id=<?= $vehicle->getId_v(); ?>" class="card-link btn btn-warning">
                        <i class="fa fa-info-circle" aria-hidden="true"></i> Détail</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
<?php
$title = "";
$content = ob_get_clean();
require_once(dirname(dirname(__DIR__)) . '/public/template_front.php');
?>