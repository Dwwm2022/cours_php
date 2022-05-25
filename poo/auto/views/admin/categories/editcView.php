<?php ob_start(); ?>
<div class="row">
    <div class="offset-3 col-6">
        <div class="card">
            <div class="card-body">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                        <label for="cat">Catégorie</label>
                        <input value="<?= $cat->getNom_cat();?>" class="form-control" type="text" name="cat" id="cat">
                    </div>
                    <div class="mt-2">
                        <button name="soumis" class="btn btn-primary col-12" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$title = "Edition d'une catégorie";
$content = ob_get_clean();
require_once(dirname(__DIR__).'/template_back.php');