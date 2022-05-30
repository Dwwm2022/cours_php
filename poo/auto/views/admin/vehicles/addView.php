<?php ob_start(); ?>
<div class="row">
    <div class="offset-2 col-8">
        <div class="card">
            <div class="card-body">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col">
                            <label for="marque">Marque</label>
                            <input placeholder="Entrez la marque" class="form-control" type="text" name="marque" id="marque">
                        </div>
                        <div class="form-group col">
                            <label for="modele">Modèle</label>
                            <input placeholder="Entrez le modèle" class="form-control" type="text" name="modele" id="modele">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="country">Pays</label>
                            <input placeholder="Entrez la pays" class="form-control" type="text" name="country" id="country">
                        </div>
                        <div class="form-group col">
                            <label for="year">Année</label>
                            <input placeholder="Entrez l'année" class="form-control" type="text" name="year" id="year">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="price">Prix</label>
                            <input placeholder="Entrez le prix" class="form-control" type="number" name="price" id="prix">
                        </div>
                        <div class="form-group col">
                            <label for="quantity">Quantité</label>
                            <input placeholder="Entrez la quantité" class="form-control" type="number" name="quantity" id="quantity">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="cat">Catégorie</label>
                            <select name="cat" id="cat" class="form-control">
                                <option hidden>Choisir</option>
                                <?php foreach($categories as $category){ ?>
                                <option value="<?=$category->getId_cat();?>"><?=ucfirst($category->getNom_cat());?></option>
                                <?php } ?>
                               
                            </select>
                        </div>
                        <div class="form-group col">
                            <label for="image">Image</label>
                            <input class="form-control" type="file" name="image" id="image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Entrer la description"></textarea>
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
$title = "Ajout d'un véhicule";
$content = ob_get_clean();
require_once(dirname(__DIR__) . '/template_back.php');
