<?php
require_once(dirname(__DIR__).'/models/Category.php');
require_once(dirname(__DIR__).'/models/Driver.php');
require_once(dirname(__DIR__).'/models/admin/AdminCategoryModel.php');
require_once(dirname(__DIR__).'/controllers/admin/AdminCategoryController.php');

class Router{
    private $acatCtr;

    public function __construct()
    {
        $this->acatCtr = new AdminCategoryController();
    }

    public function getPath(){
       if(isset($_GET['action'])){
           switch($_GET['action']){
               case 'list_cat':
                $this->acatCtr -> listCategories();
                break;
               case 'add_cat':
                $this->acatCtr->addCategory();
                break;
           }
       } 
    }
}