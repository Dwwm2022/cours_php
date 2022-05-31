<?php  ob_start(); ?>
<div class="row">
    <div class="offset-2 col-8">
        <div class="card">
            <div class="card-body">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col">
                            <label for="id">Identifiant</label>
                            <input readonly value="<?= $vehObj->getId_v() ;?>" class="form-control" type="text" name="id" >
                        </div>
                        <div class="form-group col">
                            <label for="modele">Disponibilité</label>
                            <input readonly value="<?= $vehObj->getAvailable() ?'Disponible':'Indisponible';?>" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="marque">Marque</label>
                            <input value="<?= $vehObj->getMarque();?>" class="form-control" type="text" name="marque" id="marque">
                        </div>
                        <div class="form-group col">
                            <label for="modele">Modèle</label>
                            <input value="<?= $vehObj->getModele();?>" class="form-control" type="text" name="modele" id="modele">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="country">Pays</label>
                            <input value="<?= $vehObj->getCountry();?>" class="form-control" type="text" name="country" id="country">
                        </div>
                        <div class="form-group col">
                            <label for="year">Année</label>
                            <input value="<?= $vehObj->getYear();?>" class="form-control" type="text" name="year" id="year">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="price">Prix</label>
                            <input value="<?= $vehObj->getPrice();?>" class="form-control" type="number" name="price" id="prix">
                        </div>
                        <div class="form-group col">
                            <label for="quantity">Quantité</label>
                            <input value="<?= $vehObj->getQuantity();?>" class="form-control" type="number" name="quantity" id="quantity">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="cat">Catégorie</label>
                            <select name="cat" id="cat" class="form-control">
                                <option value="<?=$vehObj->getCategory()->getId_cat();?>">
                                <?php 
                                    foreach($categories as $category){ 
                                        if($category->getId_cat()==$vehObj->getCategory()->getId_cat()){
                                            echo $category->getNom_cat();
                                        }
                                    }
                                ?>
                                </option>
                               
                                <?php foreach($categories as $category){ ?>
                                <option value="<?=$category->getId_cat();?>"><?=ucfirst($category->getNom_cat());?></option>
                                <?php } ?>
                               
                            </select>
                        </div>
                        <div class="form-group col">
                            <label for="image">Image</label>
                            <input class="form-control" type="file" name="image" id="image">
                            <img src="./assets/images/<?= $vehObj->getImage();?>" class="img-thumbnail" alt="" width="150">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" ><?= $vehObj->getDescription();?></textarea>
                    </div>
                    <div class="mt-2">
                        <button name="soumis" class="btn btn-warning col-12" type="submit">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$title = "Edition d'un véhicule";
$content = ob_get_clean();
require_once(dirname(__DIR__) . '/template_back.php');
