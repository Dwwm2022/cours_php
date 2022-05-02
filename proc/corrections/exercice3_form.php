<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 de php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-4">Formulaire</h1>
        <h3 class="ml-5 mt-5"> Coordonnées </h3>
        <form class="ml-5 col-10" method="POST" action="traitementExo1.php">
            <div class="row">
                <div class="form-group mt-5 col-6">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                </div>
                <div class="form-group mt-5 col-6">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                </div>
            </div>
            <div class="form-group mt-2">
                <label for="mdp">Mot de passe</label>
                <input type="password" class="form-control" id="mdp" name="mdp">
            </div>
            <h3 class="ml-5 mt-4"> Genre </h3>
            <div class="form-check form-check-inline mt-3">
                <input class="form-check-input" type="radio" name="genre" id="masculin" value="masculin">
                <label class="form-check-label" for="masculin">Masculin</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genre" id="feminin" value="feminin">
                <label class="form-check-label" for="feminin">Féminin</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genre" id="autre" value="autre">
                <label class="form-check-label" for="autre">Autre</label>
            </div>
            <div class="mb-2 mt-3">
                <label for="ville" class="form-label">Ville</label>
                <select class="form-select" id="ville" name="ville">
                    <option value="">choisir</option>
                    <option value="paris">Paris</option>
                    <option value="antony">Antony</option>
                    <option value="creteil">Creteil</option>
                    <option value="rungis">Rungis</option>
                    <option value="rambouillet">Rambouillet</option>
                </select>
            </div>
            <h3 class="ml-5 mt-5 mb-3"> Activitées </h3>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="quad" name="activite" id="quad">
                <label class="form-check-label" for="quad">
                    Quad
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="vtt" name="activite" id="vtt">
                <label class="form-check-label" for="vtt">
                    VTT
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="acrobranche" name="activite" id="acrobranche">
                <label class="form-check-label" for="acrobranche">
                    Acrobranche
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="moto" name="activite" id="moto">
                <label class="form-check-label" for="moto">
                    Moto Cross
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="kayak" name="activite" id="kayak">
                <label class="form-check-label" for="kayak">
                    Kayak
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Boxe" name="activite" id="Boxe">
                <label class="form-check-label" for="Boxe">
                    Boxe
                </label>
            </div>
            <h3 class="ml-5 mt-5 mb-3"> Animaux de compagnie </h3>
            <div class="mb-2 mt-4">
                <select class="form-select " id="animal" name="animal">
                    <option value="">choisir</option>
                    <option value="chien">chien</option>
                    <option value="chat">chat</option>
                    <option value="perruche">perruche</option>
                    <option value="tortue">tortue</option>
                    <option value="hamster">hamster</option>
                    <option value="fouine">fouine</option>
                </select>
            </div>

            <button type="submit" name="soumis" class="text-center btn btn-primary col-8 offset-2 mt-5 mb-5">Soumettre</button>


        </form>
    </div>
</body>

</html>