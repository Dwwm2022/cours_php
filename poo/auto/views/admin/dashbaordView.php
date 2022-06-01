<?php ob_start(); ?>
<div class="row text-center">
  <div class="col-3">
    <div class="card text-bg-primary">
      <div class="card-header font-monospace fw-bold">Catégories</div>
      <div class="card-body">
        <h1 class="card-title p-5"><?= $data['nbc'];?></h1>
        
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card text-bg-light">
      <div class="card-header font-monospace fw-bold">Véhicules</div>
      <div class="card-body">
        <h1 class="card-title p-5"><?= $data['nbv'];?></h1>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card text-bg-warning">
      <div class="card-header font-monospace fw-bold">Rôles</div>
      <div class="card-body">
        <h1 class="card-title p-5"><?= $data['nbr'];?></h1>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card text-bg-success">
      <div class="card-header font-monospace fw-bold">Administrateurs</div>
      <div class="card-body">
        <h1 class="card-title p-5"><?= $data['nbu'];?></h1>
      </div>
    </div>
  </div>
</div>

<?php
$title = "Tableau de bord";
$content = ob_get_clean();
require_once('template_back.php');
