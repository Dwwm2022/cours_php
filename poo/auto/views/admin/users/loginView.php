<?php  ob_start(); ?>
<div class="row">
    <div class="offset-4 col-4">
        <div class="card">
            <div class="card-header"><?= $error; ?></div>
            <div class="card-body">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                   
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input placeholder="Entrez l'email" class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pass">Mot de passe</label>
                        <input placeholder="Entrez le mot de passe" class="form-control" type="password" name="pass" id="pass">
                    </div>
                    
                    <div class="mt-2">
                        <button name="soumis" class="btn btn-primary col-12" type="submit">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$title = "Connexion d'un utilisateur";
$content = ob_get_clean();
require_once(dirname(__DIR__) . '/template_back.php');
