<?php
require_once('./connect.php');
if ($base) {
    if (isset($_GET['id'])) {
        $id = trim(htmlentities(addslashes($_GET['id'])));
        $sql = "SELECT * FROM personnes, langues
                WHERE personnes.id_langue = langues.id ";
        $sql2 = "SELECT * FROM personnes 
                INNER JOIN langues 
                ON personnes.id_langue = langues.id
                AND personnes.id_p = '$id'";
        $res = mysqli_query($base, $sql2);
        if ($res) {
            $data = mysqli_fetch_assoc($res);
            //  echo"<pre>";
            //  var_dump($_POST);
            //  echo"</pre>";


            if (isset($_POST['soumis'])) {
                var_dump($_POST);
                extract($_POST);
                $to = 'dwwm94@gmail.com';
                $subject = $objet;
                $message = "
                <html>
                    <head>
                        <title>Traducteurs Pro</title>
                    </head>
                    <body>
                        <h1>Vous devez contacter Mr/Mme:</h1>
                        <p>Infos traducteur:Id ".$data['id_p']." Nom".$data['nom']." Prénom".$data['prenom']."</p>
                        <p>Nom:" . $nom . "</p>
                        <p>Prénom:" . $prenom . "</p>
                        <p>Email:" . $email . "</p>
                        <p>Message:" . $message . "</p>
                    </body>
                </html>
            ";
            $headers[] = "De Traducteurs Pro <dwwm94@gmail.com";
            $headers[] = "From:  <$email>";
            $headers[] = "Reply-To:  $nom <$email>";

            mail($to, $subject, $message, implode("\r\n",$headers));
            mail($email, "Traducteurs Pro", "Merci pour votre mail, vous serez contacté très prochainement");

            }
        }
    }
}
?>
<?php require_once('partials/header.php'); ?>
<div class="card mb-3">

    <div class="row g-0">
        <div class="col-md-3">
            <img src="./assets/images/<?= $data['image']; ?>" alt="Trendy Pants and Shoes" class="img-fluid rounded-start" />
        </div>
        <div class="col-md-5">
            <div class="card-body">
                <h3 class="card-title">Informations du traducteur</h3>
                <ul class="list-group list-group-light list-group-small">
                    <li class="list-group-item text-center text-white">
                        <ul class="list-group list-group-light">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Nom:</p>
                                    </div>
                                </div>
                                <span class="badge rounded-pill badge-primary"><?= $data['nom']; ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Prénom</p>
                                    </div>
                                </div>
                                <span class="badge rounded-pill badge-primary"><?= $data['prenom']; ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Langue</p>
                                    </div>
                                </div>
                                <span class="badge rounded-pill badge-primary"><?= $data['libelle']; ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Description:</p>
                                    </div>
                                </div>
                                <span class="badge rounded-pill badge-primary"><?= $data['description']; ?></span>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <h5>Contactez ce traducteur</h5>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <label for="nom">Nom*</label>
                    <input type="text" class="form-control" placeholder="Entrer votre nom" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom*</label>
                    <input type="text" class="form-control" placeholder="Entrer votre prénom" id="prenom" name="prenom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" class="form-control" placeholder="Entrer votre email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="objet">Objet*</label>
                    <input type="text" class="form-control" placeholder="Entrer votre objet" id="objet" name="objet" required>
                </div>
                <div class="form-group">
                    <label for="message">Message*</label>
                    <textarea class="form-control" placeholder="Entrer votre message" name="message" id="message" rows="5" required></textarea>
                </div>
                <div><button class="btn btn-primary col-12" name="soumis" type="submit">Envoyer</button></div>
            </form>
        </div>
    </div>
</div>
<?php require_once('partials/footer.php'); ?>