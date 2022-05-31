<?php
require_once(dirname(__DIR__).'/models/Category.php');
require_once(dirname(__DIR__).'/models/Vehicle.php');
require_once(dirname(__DIR__).'/models/Driver.php');
require_once(dirname(__DIR__).'/models/admin/AdminCategoryModel.php');
require_once(dirname(__DIR__).'/models/admin/AdminVehicleModel.php');
require_once(dirname(__DIR__).'/controllers/admin/AdminCategoryController.php');
require_once(dirname(__DIR__).'/controllers/admin/AdminVehiculeController.php');

class Router{
    private $acatCtr;
    private $avehCtr;

    public function __construct()
    {
        $this->acatCtr = new AdminCategoryController();
        $this->avehCtr = new AdminVehiculeController();
    }

    public function getPath(){
       if(isset($_GET['action'])){
           switch($_GET['action']){
               case 'admin':
                $this->acatCtr->listData();
                break;
               case 'list_cat':
                $this->acatCtr -> listCategories();
                break;
               case 'add_cat':
                $this->acatCtr->addCategory();
                break;
               case 'delete_cat':
                $this->acatCtr->removeCat();
                break;
               case 'edit_cat':
                $this->acatCtr->editCategory();
                break;
               case 'list_veh':
                $this->avehCtr->listVehicles();
                break;
               case 'delete_veh':
                $this->avehCtr->removeVeh();
                break;
               case 'add_veh':
                $this->avehCtr->addVehicle();
                break;
               case 'edit_veh':
                $this->avehCtr->editVehicle();
                break;

           }
       } 
    }
}