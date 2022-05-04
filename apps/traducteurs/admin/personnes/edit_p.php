<?php
require_once('../../connect.php');
if ($base) {
    $sql = "SELECT * FROM langues";
    $res = mysqli_query($base, $sql);

    if(isset($_GET['id'])){
        $id = trim(htmlentities(addslashes($_GET['id'])));
        $sql2 = "SELECT * FROM personnes WHERE id_p = ".$id;
        $res3 = mysqli_query($base, $sql2);
        if($res3){
            $person = mysqli_fetch_assoc($res3);
            $libelle = "";
            while($row = mysqli_fetch_assoc($res)){
                if($row['id'] == $person['id_langue']){
                    $libelle = $row['libelle'];
                }
            }
        }
    }
}
$errMsg = "";
if (isset($_POST['soumis'])) { 
    if (!empty($_POST['nom']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $nom = trim(addslashes(htmlentities($_POST['nom'])));
        $prenom = trim(addslashes(htmlentities($_POST['prenom'])));
        $age = (int)trim(addslashes(htmlentities($_POST['age'])));
        $telephone = trim(addslashes(htmlentities($_POST['telephone'])));
        $email = trim(addslashes(htmlentities($_POST['email'])));
        $langue = (int)trim(addslashes(htmlentities($_POST['langue'])));
        $description = trim(addslashes(htmlentities($_POST['description'])));
        $image = $_FILES['image']['name'];

        $destination = "../../assets/images/";
        move_uploaded_file($_FILES['image']['tmp_name'], $destination . $_FILES['image']['name']);
        // echo"<pre>";
        // var_dump($_FILES);
        // echo"</pre>";
        

        if ($base) {
            $req = "INSERT INTO personnes (nom, prenom, age, telephone, email, description,image, id_langue)
            VALUES('$nom','$prenom','$age','$telephone','$email','$description','$image','$langue')";
            $res2 = mysqli_query($base, $req);
            //var_dump(($res2));
            if ($res2) {
                header('location:list_p.php');
            } else {
                $errMsg = "<div class='alert alert-danger text-center'>Echec d'insertion</div>";
            }
        } else {
            $errMsg = "<div class='alert alert-danger text-center'>Echec de connexion</div>";
        }
    } else {
        $errMsg = "<div class='alert alert-danger text-center'>Format de champs non valides</div>";
    }
}
?>
<?php require_once('../../partials/header.php'); ?>
<div class="col-6 offset-3 my-3">
    <h1>Edition d'un traducteur</h1>
    <?= $errMsg; ?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <div class="form-outline mb-4">
            <input type="text" id="nom" name="nom" class="form-control" value="<?=$person['nom'];?>" required />
            <label class="form-label" for="nom">Nom*</label>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="prenom" name="prenom" class="form-control" value="<?=$person['prenom'];?>" required />
            <label class="form-label" for="prenom">Prénom</label>
        </div>

        <div class="form-outline mb-4">
            <input type="number" min="18" id="age" name="age" class="form-control" value="<?=$person['age'];?>" required />
            <label class="form-label" for="age">Age*</label>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="telephone" name="telephone" class="form-control" value="<?=$person['telephone'];?>" required />
            <label class="form-label" for="nom">Telephone*</label>
        </div>
        <div class="form-outline mb-2">
            <input type="email" id="email" name="email" class="form-control" value="<?=$person['email'];?>" required />
            <label class="form-label" for="email">Email adresse*</label>
        </div>
        <div class="col-12 mb-2">
            <label class="" for="langue">Langue*</label>
            <select class="select form-control" id="langue" name="langue" required>
                <option value="<?=$langue['id_langue'];?>" hidden><?=ucfirst($libelle);?></option>
                <?php if ($res) {
                    while ($langue = mysqli_fetch_assoc($res)) { ?>
                        <option value="<?= $langue['id']; ?>"><?= ucfirst($langue['libelle']); ?></option>
                <?php }
                } ?>
            </select>
        </div>
        <div class="mb-4">
            <label class="form-label" for="image">Image*</label>
            <input type="file" id="image" name="image" class="form-control" required />
            <img src="../../assets/images/<?=$person['image'];?>" alt="" width="50">
        </div>

        <div class="form-outline mb-4">
            <textarea class="form-control" id="description" name="description" rows="4"><?=$person['description'];?></textarea>
            <label class="form-label" for="description">Description</label>
        </div>

        <!-- Submit button -->
        <button type="submit" name="soumis" class="btn btn-warning btn-block">Modifier</button>
    </form>
</div>
<?php require_once('../../partials/footer.php'); ?>