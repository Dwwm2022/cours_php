<?php
require_once(dirname(__DIR__).'/models/Category.php');
require_once(dirname(__DIR__).'/models/Vehicle.php');
require_once(dirname(__DIR__).'/models/Role.php');
require_once(dirname(__DIR__).'/models/User.php');
require_once(dirname(__DIR__).'/models/Driver.php');
require_once(dirname(__DIR__).'/models/admin/AdminCategoryModel.php');
require_once(dirname(__DIR__).'/models/admin/AdminVehicleModel.php');
require_once(dirname(__DIR__).'/models/admin/AdminRoleModel.php');
require_once(dirname(__DIR__).'/models/admin/AdminUserModel.php');
require_once(dirname(__DIR__).'/controllers/admin/AdminCategoryController.php');
require_once(dirname(__DIR__).'/controllers/admin/AdminVehiculeController.php');
require_once(dirname(__DIR__).'/controllers/admin/AdminRoleController.php');
require_once(dirname(__DIR__).'/controllers/admin/AdminUserController.php');

class Router{
    private $acatCtr;
    private $avehCtr;
    private $arCtr;
    private $auCtr;

    public function __construct()
    {
        $this->acatCtr = new AdminCategoryController();
        $this->avehCtr = new AdminVehiculeController();
        $this->arCtr = new AdminRoleController();
        $this->auCtr = new AdminUserController();

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
               case 'list_r':
                $this->arCtr->listRoles();
                break;
               case 'add_r':
                $this->arCtr->addRole();
                break;
               case 'list_u':
                $this->auCtr->listUsers();
                break;


           }
       } 
    }
}