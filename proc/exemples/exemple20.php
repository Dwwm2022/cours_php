<?php
    var_dump($_POST);
    if(isset($_POST)){
        extract($_POST);
        echo $email, $pass;
        echo $_POST['email'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Formulaire</title>
</head>
<body>
    <div class="container">
        <div class="col-6 offset-3">
            <h1 class="h4">Formulaire de connexion</h1>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" id="eamil" name="email"  class="form-control" placeholder="Entrez votre email adresse!">
                </div>
                <div class="form-group">
                    <label for="pass">Mot de passe*</label>
                    <input type="password" id="pass" name="pass"  class="form-control" placeholder="Entrez votre mot de passe!">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary col-12">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
<body>
</html>