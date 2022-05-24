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
}

// $acatCtr = new AdminCategoryController();
// $acatCtr->listCategories();

