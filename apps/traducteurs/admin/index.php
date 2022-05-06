<?php
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
    }else{
        $email = trim(addslashes(htmlentities($_POST['email'])));
        $pass = trim(addslashes(htmlentities($_POST['pass'])));
        if($base){
            $sql = "SELECT * FROM   utilisateurs 
            WHERE email = '$email'";
            $res = mysqli_query($base, $sql);
            if($res){
                $data = mysqli_fetch_assoc($res);
                if(password_verify($pass, $data['pass'])){
                    session_start();
                    $_SESSION['user'] = $data;
                    // echo'<pre>';
                    // var_dump($_SESSION); die;
                    // echo'<pre>';
                    header('location:personnes/list_p.php');
                }else{
                    $error = '<div class="alert alert-danger">
                                <strong>Le login et le mot de passe ne correspondent pas!</strong> 
                            </div>';
                }
            }
        }
    }
}
?>
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
    <div class="" style="background-image: url('../assets/images/fond.jpg');background-repeat: no-repeat; background-size: cover; height: 100vh;">
        <div class="d-flex align-items-center justify-content-center mt-5">
            <div class="card col-4">
                <div class="text-center">
                    <i class="fas fa-globe fa-5x text-primary"></i>
                    <h1>Traducteurs-Pro</h1>
                </div>
                <div class="card-header"><?=$error;?></div>
                <div class="card-body">
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control" required />
                            <label class="form-label" for="email">Email adresse*</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="pass" name="pass" class="form-control" required />
                            <label class="form-label" for="pass">Mot de passe*</label>
                        </div>
                        <button type="submit" name="soumis" class="btn btn-primary btn-block">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>