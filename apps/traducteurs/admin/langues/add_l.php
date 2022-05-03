<?php
require_once('../../connect.php');
if(isset($_POST['soumis']) && !empty($_POST['libelle'])){
    $libelle = trim(addslashes(htmlentities($_POST['libelle'])));
    $drapeau = $_FILES['drapeau']['name'];
    $destination = "../../assets/images/";
    move_uploaded_file($_FILES['drapeau']['tmp_name'],
     $destination.$_FILES['drapeau']['name']);

    $sql = "INSERT INTO langues (libelle,drapeau)
            VALUES('$libelle','$drapeau')";
    $res = mysqli_query($base, $sql);
    if($res){
        header('location:list_l.php');
    }else{
        echo "Echec d'insertion...";
    }
}

?>
<?php require_once('../../partials/header.php'); ?>
<div class="col-4 offset-4">
    <h1 class="h4 mt-3">Ajout d'une langue</h1>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
  <!-- Name input -->
  <div class="form-outline mb-4">
      <input type="text" id="libelle" class="form-control" name="libelle" required/>
      <label class="form-label" for="libelle">Libelle</label>
  </div>
  <div class="mb-4">
      <label class="form-label" for="drapeau" >Drapeau</label>
      <input type="file" id="drapeau" class="form-control" name="drapeau" required />
  </div>

  <!-- Submit button -->
  <button type="submit" name="soumis" class="btn btn-primary btn-block mb-4">Envoyer</button>
</form>
</div>
<?php require_once('../../partials/footer.php'); ?>