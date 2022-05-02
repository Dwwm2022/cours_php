<?php
 if(isset($_GET['soumis'])){
    extract($_GET);
    //var_dump($_GET);
    $data = explode(' ', $ville);
    // echo"<br/>";
    // var_dump($data);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<h1>Les villes</h1>
        <!-- <form action="traitementExo4.php" method="get"> -->
        <div class="mb-2">
            <label for="ville" class="form-label">Villes</label>
            <select name="" id="">
                <?php 
                echo '<option>Choisir une ville</option>';
                foreach($data as $d){
                   echo' <option value="'.$d.'">'.ucfirst($d).'</option>';
               
            }?>
            </select>
        </div>
    </form>
    </div>
</body>
</html>