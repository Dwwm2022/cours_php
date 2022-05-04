<?php
require_once('../../connect.php');
if ($base) {
    $sql = "SELECT * FROM langues";
    $res = mysqli_query($base, $sql);
}
if(isset($_POST['soumis']) && !empty($_POST['nom']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $nom = trim(addslashes(htmlentities($_POST['nom'])));
    $prenom = trim(addslashes(htmlentities($_POST['prenom'])));
    $age = (int)trim(addslashes(htmlentities($_POST['age'])));
    $telephone = (int)trim(addslashes(htmlentities($_POST['telephone'])));
    $email = trim(addslashes(htmlentities($_POST['email'])));
    $langue = (int)trim(addslashes(htmlentities($_POST['langue'])));
    $description = trim(addslashes(htmlentities($_POST['description'])));
    $image = $_FILES['image']['name'];

    $destination = "../../assets/images/";
    move_uploaded_file($_FILES['image']['tmp_name'], $destination.$_FILES['image']['name']);
    echo"<pre>";
    var_dump($_FILES);
    echo"</pre>";

    // if($base){
    //     $req = "INSERT INTO"
    // }
}
?>
<?php require_once('../../partials/header.php'); ?>
<div class="col-6 offset-3 my-3">
    <h1>Ajout d'un traducteur</h1>
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
        <div class="col-12 mb-2">
            <label class="" for="langue">Langue*</label>
            <select class="select form-control" id="langue" name="langue" required>
                <option value="0" hidden>Choisir</option>
                <?php if ($res) {
                    while ($langue = mysqli_fetch_assoc($res)) { ?>
                        <option value="<?=$langue['id'];?>"><?=ucfirst($langue['libelle']);?></option>
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
        <button type="submit" name="soumis" class="btn btn-primary btn-block">Envoyer</button>
    </form>
</div>
<?php require_once('../../partials/footer.php'); ?>