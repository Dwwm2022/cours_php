<?php
//die(dirname(dirname(__DIR__)).'/models/admin/AdminCategoryModel.php');
// require_once(dirname(dirname(__DIR__)).'/models/Category.php');
// require_once(dirname(dirname(__DIR__)).'/models/Driver.php');
// require_once(dirname(dirname(__DIR__)).'/models/admin/AdminCategoryModel.php');
class AdminCategoryController{

    private $acmodel;

    public function __construct()
    {
        $this->acmodel = new AdminCategoryModel();
    }

    public function listCategories(){
        $categories = $this->acmodel->getCategories();
        require_once(dirname(dirname(__DIR__)).'/views/admin/categories/listView.php');
    }

    public function addCategory(){
        if(isset($_POST['soumis']) && !empty($_POST['cat'])){
            $nom_cat = trim(addslashes(htmlentities($_POST['cat'])));
            $newCat = new Category();
            $newCat->setNom_cat($nom_cat);
            $ok = $this->acmodel->insertCategory($newCat);
            if($ok){
                header('location:index.php?action=list_cat');
            }

        }
        require_once(dirname(dirname(__DIR__)).'/views/admin/categories/addView.php');
    }
}

// $acatCtr = new AdminCategoryController();
// $acatCtr->listCategories();

