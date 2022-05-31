<?php ob_start(); ?>
<div class="row">
    <div class="offset-3 col-6">
        <div class="card">
            <div class="card-body">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                        <label for="lastname">Nom</label>
                        <input placeholder="Entrez le nom" class="form-control" type="text" name="lastname" id="lastname">
                    </div>
                    <div class="form-group">
                        <label for="firstname">Prénom</label>
                        <input placeholder="Entrez le prénom" class="form-control" type="text" name="firstname" id="firstname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input placeholder="Entrez l'email" class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pass">Mot de passe</label>
                        <input placeholder="Entrez le mot de passe" class="form-control" type="password" name="pass" id="pass">
                    </div>
                    <div class="form-group">
                        <label for="role">Rôle</label>
                        <select name="role" id="role" class="form-control">
                            <option hidden>Choisir</option>
                            <?php foreach($roles as $role): ?>
                            <option value="<?= $role->getId_r();?>"><?= $role->getName_r();?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mt-2">
                        <button name="soumis" class="btn btn-primary col-12" type="submit">Inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$title = "Ajout d'un utilisateur";
$content = ob_get_clean();
require_once(dirname(__DIR__).'/template_back.php');