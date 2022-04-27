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
        <form action="traitement.php" method="post">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" class="form-control" placeholder="Entrez votre nom!">
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" class="form-control" placeholder="Entrez votre âge!">
            </div>
            <div class="form-group">
                <label for="module">Modules</label>
                <select name="module" id="module" class="form-control">
                    <option value="php">Php</option>
                    <option value="sql">Sql</option>
                    <option value="js">Js</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pays">Pays visités</label>
                <select class="form-control" name="pays[]" multiple id="pays">
                    <option value="ca">Canada</option>
                    <option value="es">Espagne</option>
                    <option value="en">Angleterre</option>
                    <option value="m">Mali</option>
                    <option value="tu">Tunisie</option>
                </select>
            </div>
            <div class="form-group">
                <input type="checkbox" name="loisir[]" value="sport" id="sport">
                <label for="sport">Sport</label><br>

                <input type="checkbox" name="loisir[]" value="voyage" id="voyage">
                <label for="voyage">Voyage</label><br>

                <input type="checkbox" name="loisir[]" value="lecture" id="lecture">
                <label for="lecture">Lecture</label><br>

                <input type="checkbox" name="loisir[]" value="film" id="film">
                <label for="film">Film</label><br>
                
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
            </div>
            <div>
                <button type="submit" name="soumis" class="btn btn-primary">Soumettre</button>
            </div>
        </form>
    </div>
</body>
</html>