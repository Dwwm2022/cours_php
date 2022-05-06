<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
  <title>Traducteurs-Pro</title>
</head>
<body>
  <div class="container">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/cours_php/apps/traducteurs/index.php"><i class="fas fa-globe"></i> Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/cours_php/apps/traducteurs/about.php">A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/cours_php/apps/traducteurs/contact.php">Contact</a>
              </li>
            </ul>
          </div>
          <div class="d-flex align-items-center">
            <div class="dropdown">
              <a class="dropdown-toggle d-flex align-items-center hidden-arrow text-white" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                <?php
                if (isset($_SESSION['user'])) {
                  echo "<i class='fas fa-tools fa-2x'></i> ".$_SESSION['user']['email'];
                } 
                ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                <li>
                  <a class="dropdown-item" href="/cours_php/apps/traducteurs/admin/index.php">Se connecter</a>
                </li>
                <?php if($_SESSION['user']){?>
                <li>
                  <a class="dropdown-item" href="/cours_php/apps/traducteurs/admin/register.php">Inscription</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/cours_php/apps/traducteurs/security/logout.php">Déconnexion</a>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>