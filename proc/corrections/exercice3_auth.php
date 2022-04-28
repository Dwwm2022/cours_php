<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice Authentification</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
  <h1 class="text-center mb-5">Authentification</h1>
  <form method="POST" action="traitementExo2.php">
    <div class="mb-5 form-group text-center col-6 offset-3">
      <label for="login">Login</label>
      <input type="login" class="form-control" name="login" id="login" placeholder="Enter login">
    </div>
    <div class="mb-5 form-group text-center col-6 offset-3">
      <label for="pass">Password</label>
      <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary offset-3 col-6" name="soumis">Submit</button>
  </form>
</body>

</html>