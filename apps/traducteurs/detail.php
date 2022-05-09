<?php
require_once('./connect.php');
if ($base) {
    $successMsg = "";
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
                //var_dump($_POST);
                extract($_POST);
                $nom = trim(htmlspecialchars(addslashes($nom)));
                $prenom = trim(htmlspecialchars(addslashes($prenom)));
                $email = trim(htmlspecialchars(addslashes($email)));

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
                        <p>Email:" . $email . "</p>
                        <p>Message:" . $message . "</p>
                        <h2>Avec le/la traducteur(trice) de N° " . $data['id_p'] . "</h2>
                        <ul>
                            <li>Id: " . $data['id_p'] . "</li>
                            <li>Nom: " . $data['nom'] . "</li>
                            <li>Prénom: " . $data['prenom'] . "</li>
                            <li>Téléphone: " . $data['telephone'] . "</li>
                            <li>Email: " . $data['email'] . "</li>
                        </ul>
                    </body>
                </html>
            ";
                 // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
                    $headers[] = 'MIME-Version: 1.0';
                    $headers[] = 'Content-type: text/html; charset=utf-8';

                    // En-têtes additionnels
                    $headers[] = "To: Dwwm <dwwm94@gmail.com>, Adimi <adimicool@gmail.com>";
                    $headers[] = "From: No-Reply <$email>";
                    $headers[] = "Reply-To: $nom <$email>";
                    $headers[] = 'Cc: ';
                    $headers[] = 'Bcc: ';

                if (mail($to, $subject, $message, implode("\r\n", $headers))) {
                    mail($email, "Traducteurs Pro", "Merci pour votre mail, vous serez contacté très prochainement");
                    $successMsg = "<div class='alert alert-success text-center'>Mail envoyé avec succès!</div>";
                }
            }
        }
    }
}
?>
<?php require_once('partials/header.php'); ?>
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-3">
            <img src="./assets/images/<?= $data['image']; ?>" alt="Trendy Pants and Shoes" class="img-fluid rounded-start img-thumbnail" />
        </div>
        <div class="col-md-5">
            <div class="card-body">
                <h3 class="card-title"><img src="./assets/images/<?=$data['drapeau'];?>" alt="" width="30" ?> Informations du traducteur</h3>
                <ul class="list-group list-group-light list-group-small">
                    <li class="list-group-item text-center text-white">
                        <ul class="list-group list-group-light">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Nom:</p>
                                    </div>
                                </div>
                                <span class="text-primary"><?= $data['nom']; ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Prénom</p>
                                    </div>
                                </div>
                                <span class="text-primary"><?= $data['prenom']; ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Langue</p>
                                    </div>
                                </div>
                                <span class="text-primary"><?= $data['libelle']; ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start">
                                <div class="d-flex">
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Description:</p>
                                        <p class="note note-primary"><?= $data['description']; ?></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <h5>Contactez ce traducteur</h5>
            <?= $successMsg; ?>
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
                <div class="mt-2"><button class="btn btn-primary col-12" name="soumis" type="submit"><i class="fas fa-paper-plane"></i> Envoyer</button></div>
            </form>
        </div>
    </div>
</div>
<?php require_once('partials/footer.php'); ?>