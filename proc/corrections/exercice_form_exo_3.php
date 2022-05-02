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
    <h1>Exercice formulaire cree titre html css </h1>
    <form action="traitementExo3.php" method="get">
        <div class="mb-2">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" placeholder="Votre titre" >
        </div>
        <div class="mb-2">
            <label for="css" class="form-label">Css</label>
            <textarea class="form-control" id="css" name="css" placeholder="Votre css" ></textarea>
        </div>
        <div class="mb-2">
            <label for="html" class="form-label">Html</label>
            <textarea class="form-control" id="html" name="html" placeholder="Votre html" ></textarea>
        </div>
        <button type="submit" class="btn btn-success" name="soumis">Envoyer</button>
    </form>
</div>
</body>
</html>