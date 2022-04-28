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
        <p><a href="traitement2.php?num=6">N°Produit</a></p>
        <form action="traitement2.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" class="form-control" placeholder="Entrez votre nom!">
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" class="form-control" placeholder="Entrez votre âge!">
            </div>
            <div>
                <button type="submit"class="btn btn-primary">Soumettre</button>
            </div>
        </form>
    </div>
</body>
</html>