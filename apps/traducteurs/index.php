<?php
require_once('./connect.php');
if ($base) {
    $errMsg = "";
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
        if (!empty($_POST['nom']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $nom = trim(addslashes(htmlentities($_POST['nom'])));
            $prenom = trim(addslashes(htmlentities($_POST['prenom'])));
            $age = (int)trim(addslashes(htmlentities($_POST['age'])));
            $objet = (int)trim(addslashes(htmlentities($_POST['objet'])));
            $telephone = trim(addslashes(htmlentities($_POST['telephone'])));
            $email = trim(addslashes(htmlentities($_POST['email'])));
            $langue = (int)trim(addslashes(htmlentities($_POST['langue'])));
            $description = trim(addslashes(htmlentities($_POST['description'])));
            $image = $_FILES['image']['name'];

            $destination = "./assets/images/";
            move_uploaded_file($_FILES['image']['tmp_name'], $destination . $_FILES['image']['name']);
            $to = 'dwwm94@gmail.com';
            $subject = $objet;
            $message = "
                <html>
                    <head>
                        <style>
                            h1,h2{
                                color:blue;
                            }
                            ul{
                                background-color:grey;
                                color: white;
                            }
                        </style>
                        <title>Traducteurs Pro</title>
                    </head>
                    <body>
                        <h1>Etablir la mise en relation de Mr/Mme:" . $prenom . "  " . strtoupper($nom) . "</h1>
                        <table>
                            <tr>
                            <th>Nom: </th><td>" . $nom . "</th>
                            </tr>
                            <tr>
                            <th>Prenom: </th><td>" . $prenom . "</td>
                            </tr>
                            <tr>
                            <th>Age: </th><td>$age</td>
                            </tr>
                            <tr>
                            <th>Image: </th><td> <img  src=\"./assets/images/<?= $image; ?>\" alt=''></td>
                            </tr>
                        </table>
                    </body>
                </html>
            ";
            // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
            $headers[] = 'MIME-Version: 1.0';
            $headers[] = 'Content-type: text/html; charset=utf-8';

            $headers[] = "De Traducteurs Pro <dwwm94@gmail.com";
            $headers[] = "From:  <$email>";
            $headers[] = "Reply-To:  $nom <$email>";

            if (mail($to, $subject, $message, implode("\r\n", $headers))) {
                mail($email, "Traducteurs Pro", "Merci pour votre mail, vous serez contacté très prochainement");
                header('location:index.php');
            }
        }
    } else {
        $sql = "SELECT * FROM personnes, langues
                WHERE personnes.id_langue = langues.id
                ORDER BY id_p DESC";
        $sql2 = "SELECT COUNT(id_langue)  AS num, id, libelle, drapeau, image FROM personnes 
                INNER JOIN langues 
                ON personnes.id_langue = langues.id
                GROUP BY id_langue";
        $sql3 = "SELECT * FROM langues";
    }
    $res = mysqli_query($base, $sql);
    $res2 = mysqli_query($base, $sql2);
    $res3 = mysqli_query($base, $sql3);
}
?>
<?php require_once('partials/header.php'); ?>
<div class="row my-3">
    <h1 class="text-center title">Traducteurs-Pro</h1>
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
                                <p class="card-text"><?= $data['description']; ?></p>
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
                    <a href="" class="btn btn-info btn-block" data-mdb-toggle="modal" data-mdb-target="#exampleModal">Inscrivez-vous</a>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-language"></i> Je m'inscris</h5>
                                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?= $errMsg; ?>
                                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="nom" name="nom" class="form-control" required />
                                            <label class="form-label" for="nom">Nom*</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="prenom" name="prenom" class="form-control" required />
                                            <label class="form-label" for="prenom">Prénom</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="number" min="18" id="age" name="age" class="form-control" required />
                                            <label class="form-label" for="age">Age*</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="telephone" name="telephone" class="form-control" required />
                                            <label class="form-label" for="nom">Telephone*</label>
                                        </div>
                                        <div class="form-outline mb-2">
                                            <input type="email" id="email" name="email" class="form-control" required />
                                            <label class="form-label" for="email">Email adresse*</label>
                                        </div>
                                        <div class="form-outline mb-2">
                                            <input type="text" id="objet" name="objet" class="form-control" required />
                                            <label class="form-label" for="objet">Objet*</label>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label class="" for="langue">Langue*</label>
                                            <select class="select form-control" id="langue" name="langue" required>
                                                <option value="0" hidden>Choisir</option>
                                                <?php if ($res3) {
                                                    while ($langue = mysqli_fetch_assoc($res3)) { ?>
                                                        <option value="<?= $langue['id']; ?>"><?= ucfirst($langue['libelle']); ?></option>
                                                <?php }
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="image">Image*</label>
                                            <input type="file" id="image" name="image" class="form-control" required />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                                            <label class="form-label" for="description">Description</label>
                                        </div>

                                        <!-- Submit button -->
                                        <button type="submit" name="soumis" class="btn btn-primary btn-block">
                                            <i class="far fa-paper-plane"></i> Envoyer
                                        </button>
                                    </form>
                                </div>
                                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div> -->
                            </div>
                        </div>
                    </div>
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
                                                        <input type="hidden" class="form-control" id="search" name="id" value="<?= $line['id']; ?>" placeholder="Rechercher..." />
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

                                    <!-- Button trigger modal -->
                                    <!-- <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                                    Launch demo modal
                                </button> -->

                            <?php }
                        } ?>
                    </ul>
                </li>

            </ul>

        </div>
    </div>
</div>

<?php require_once('partials/footer.php'); ?>