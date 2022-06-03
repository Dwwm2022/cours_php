<?php
// require_once(dirname(__DIR__).'/models/Category.php');
// require_once(dirname(__DIR__).'/models/Vehicle.php');
// require_once(dirname(__DIR__).'/models/Role.php');
// require_once(dirname(__DIR__).'/models/User.php');
// require_once(dirname(__DIR__).'/models/Driver.php');
// require_once(dirname(__DIR__).'/models/admin/AdminCategoryModel.php');
// require_once(dirname(__DIR__).'/models/admin/AdminVehicleModel.php');
// require_once(dirname(__DIR__).'/models/admin/AdminRoleModel.php');
// require_once(dirname(__DIR__).'/models/admin/AdminUserModel.php');
// require_once(dirname(__DIR__).'/controllers/admin/AdminCategoryController.php');
// require_once(dirname(__DIR__).'/controllers/admin/AdminVehiculeController.php');
// require_once(dirname(__DIR__).'/controllers/admin/AdminRoleController.php');
// require_once(dirname(__DIR__).'/controllers/admin/AdminUserController.php');
// require_once(dirname(__DIR__).'/controllers/admin/AdminAuthController.php');

require_once('./app/autoload.php');
class Router{
    private $acatCtr;
    private $avehCtr;
    private $arCtr;
    private $auCtr;
    private $phCtr;

    public function __construct()
    {
        $this->acatCtr = new AdminCategoryController();
        $this->avehCtr = new AdminVehiculeController();
        $this->arCtr = new AdminRoleController();
        $this->auCtr = new AdminUserController();
        $this->phCtr = new HomeController();

    }

    public function getPath(){
       try {
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
                case 'add_u':
                 $this->auCtr->addUser();
                 break;
                case 'login':
                 $this->auCtr->connection();
                 break;
                case 'logout':
                 AdminAuthController::signOut();
                 break;
                case 'about':
                 $this->phCtr->about();
                 break;
                case 'show':
                 $this->phCtr->detail();
                 break;  
                case 'pay': 
                 $this->phCtr->payment();
                 break; 
                 case 'success': 
                    $this->phCtr->confirmation();
                    break;
                case 'cancel': 
                    $this->phCtr->annuler();
                    break;  
                default:
                 throw new Exception("Action non définie");
            }
        }else{
            $this->phCtr->listVehicles();
        } 
       } catch (Exception $e) {
           $this->page404($e->getMessage());
       }
    }

    private function page404($errorMsg){
        require_once('./views/notFoundView.php');
    }
}