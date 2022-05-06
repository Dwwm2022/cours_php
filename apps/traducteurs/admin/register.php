<?php
require_once('../security/auth.php');
require_once('../connect.php');
$error = "";
if (isset($_POST['soumis'])) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error = '<div class="alert alert-danger text-center">
        <strong>L\'adresse email est invalide.</strong> 
    </div>';
    } elseif (!preg_match("/[a-zA-Z0-9]{4,8}/", $_POST['pass'])) {
        $error = '<div class="alert alert-danger text-center">
        <strong>Le mot de passe est invalide.</strong> 
    </div>';
    } else {
        $nom = trim(addslashes(htmlentities($_POST['nom'])));
        $prenom = trim(addslashes(htmlentities($_POST['prenom'])));
        $email = trim(addslashes(htmlentities($_POST['email'])));
        $pass = trim(addslashes(htmlentities($_POST['pass'])));
        $adresse = trim(addslashes(htmlentities($_POST['adresse'])));
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
        isset($_POST['role']) ? $role = $_POST['role'] : $role = 0;
        if ($base) {
            $sql = "INSERT INTO utilisateurs(nom, prenom, email, pass, adresse, role)
                VALUES('$nom', '$prenom', '$email', '$pass_hash', '$adresse', '$role')";
            $res = mysqli_query($base, $sql);
            if($res){
               header('location:personnes/list_p.php') ;
            }else{
                $error = '<div class="alert alert-danger text-center">
        <strong>Problème d\'insertion. ou l\'emil existe déjà</strong> 
    </div>';
            }
        } else {
            $error = '<div class="alert alert-danger text-center">
        <strong>Problème de connexion</strong> 
    </div>';
        }
    }
}
?>
<?php require_once('../partials/header.php'); ?>
<div class=" offset-3 col-6">
    <div class="card">
        <div class="card-header text-center">Page d'inscription</div>
        <?php echo $error; ?>
        <div class="card-body">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <label for="nom">Nom*</label>
                    <input type="text" class="form-control" placeholder="Entrer votre nom" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom*</label>
                    <input type="text" class="form-control" placeholder="Entrer votre email" id="prenom" name="prenom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" placeholder="Entrer votre email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="pass">Mot de passe:</label>
                    <input type="password" class="form-control" placeholder="Entrer votre mot de passe" id="pass" name="pass">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" placeholder="Entrer votre adresse" id="adresse" name="adresse">
                </div>
                <div class="mb-3 form-group form-check">
                    <input type="checkbox" class="form-check-input" id="role" name="role" value="1">
                    <label class="form-check-label" for="role">Administrateur</label>
                </div>
                <button type="submit" class="btn btn btn-secondary btn-block" name="soumis">Soumettre</button>
            </form>
        </div>
    </div>

</div>
<?php require_once('../partials/footer.php'); ?>