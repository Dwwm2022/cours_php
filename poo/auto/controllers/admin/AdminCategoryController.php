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

    public function removeCat(){
        if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT) ){
            $id = trim(htmlentities(addslashes($_GET['id'])));
            $delete_cat = new Category();
            $delete_cat->setId_cat($id);
            $num = $this->acmodel->deleteCategory($delete_cat);
            if($num == 1){
                header('location:index.php?action=list_cat');
            }
        }
    }
    public function editCategory(){
        if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT) ){

            $id = trim(htmlentities(addslashes($_GET['id'])));
            $edit_cat = new Category();
            $edit_cat->setId_cat($id);

            if(isset($_POST['soumis']) && !empty($_POST['cat'])){
                $nomcat = trim(htmlentities(addslashes($_POST['cat'])));
                $edit_cat->setNom_cat($nomcat);
                $ok = $this->acmodel->updateCategory($edit_cat);
                if($ok->rowCount() > 0){
                    header('location:index.php?action=list_cat');
                }
            }
            $cat = $this->acmodel->categoryItem($edit_cat);

            require_once(dirname(dirname(__DIR__)).'/views/admin/categories/editcView.php');
        }
    }

    public function listData(){
        $data = $this->acmodel->getData();
        require_once(dirname(dirname(__DIR__)).'/views/admin/dashbaordView.php');
    }
}

//  $acatCtr = new AdminCategoryController();
//  $acatCtr->editCategory();
//  var_dump($cat);

