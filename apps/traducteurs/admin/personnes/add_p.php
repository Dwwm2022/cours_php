<?php require_once('../../partials/header.php'); ?>
<div class="col-6 offset-3 my-3">
    <h1>Ajout d'un traducteur</h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <div class="form-outline mb-4">
            <input type="text" id="nom" name="nom" class="form-control" required />
            <label class="form-label" for="nom">Nom*</label>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="prenom" name="prenom" class="form-control" required />
            <label class="form-label" for="prenom">Prénom</label>
        </div>

        <div class="form-outline mb-4">
            <input type="number" min="18" id="age" name="age" class="form-control" required />
            <label class="form-label" for="age">Age*</label>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="telephone" name="telephone" class="form-control" required />
            <label class="form-label" for="nom">Telephone*</label>
        </div>
        <div class="form-outline mb-2">
            <input type="email" id="email" class="form-control" required />
            <label class="form-label" for="email">Email adresse*</label>
        </div>
        <div class="col-12 mb-2">
            <label class="" for="langue">Langue*</label>
            <select class="select form-control" id="langue" name="langue" required>
                <option value="0" hidden>Choisir</option>
                <option value="2">Français</option>
                <option value="3">Anglais</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="form-label" for="image">Image*</label>
            <input type="file" id="image" name="image" class="form-control" required />
        </div>

        <div class="form-outline mb-4">
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            <label class="form-label" for="description">Description</label>
        </div>

        <!-- Submit button -->
        <button type="submit" name="soumis" class="btn btn-primary btn-block">Envoyer</button>
    </form>
</div>
<?php require_once('../../partials/footer.php'); ?>