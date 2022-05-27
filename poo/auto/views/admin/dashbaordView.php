<?php ob_start(); ?>
<div class="row text-center">
  <div class="offset-1 col-3">
    <div class="card text-bg-primary">
      <div class="card-header">Catégories</div>
      <div class="card-body">
        <h1 class="card-title p-5"><?= $data['admin'];?></h1>
        
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card text-bg-light">
      <div class="card-header">Véhicules</div>
      <div class="card-body">
        <h1 class="card-title p-5">15</h1>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card text-bg-success">
      <div class="card-header">Administrateurs</div>
      <div class="card-body">
        <h1 class="card-title p-5">5</h1>
      </div>
    </div>
  </div>
</div>

<?php
$title = "Tableau de bord";
$content = ob_get_clean();
require_once('template_back.php');