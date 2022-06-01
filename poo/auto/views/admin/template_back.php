<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

  <div class="sidenav">
    <h1 class="text-white text-center"><i class="fa fa-car fa-2x"></i></h1>
    <a href="index.php?action=admin"><i class="fa fa-dashboard"></i>Tableau de board</a>

    <button class="dropdown-btn">Catégories
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="index.php?action=add_cat">Ajout</a>
      <a href="index.php?action=list_cat">Liste</a>
    </div>
    <button class="dropdown-btn">Véhicules
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="index.php?action=add_veh">Ajout</a>
      <a href="index.php?action=list_veh">Liste</a>
    </div>
    <button class="dropdown-btn">Rôles
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="index.php?action=add_r">Ajout</a>
      <a href="index.php?action=list_r">Liste</a>
    </div>
    <button class="dropdown-btn">Utilisateurs
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="index.php?action=add_u">Ajout</a>
      <a href="index.php?action=list_u">Liste</a>
    </div>
    <a href="#contact">Search</a>
  </div>

  <div class="main">
    <h2 class="display-1 bg-secondary text-white text-center">
      <?= $title; ?>
    </h2>
    <?= $content; ?>
  </div>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>

</body>

</html>