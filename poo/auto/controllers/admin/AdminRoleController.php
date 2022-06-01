<?php

class AdminRoleController{
    private $armodel;

    public function __construct()
    {
        $this->armodel = new AdminRoleModel();
    }

    public function listRoles(){
        AdminAuthController::isLogged();
        $roles = $this->armodel->getRoles();
        require_once(dirname(dirname(__DIR__)).'/views/admin/roles/listView.php');
    }

    public function addRole(){
        AdminAuthController::isLogged();
        if(isset($_POST['soumis']) && !empty($_POST['role'])){
            $role = trim(addslashes(htmlentities($_POST['role'])));
            $newRole = new Role();
            $newRole->setName_r($role);
            $isOk = $this->armodel->insertRole($newRole);
            if($isOk){
                header('location:index.php?action=list_r');
            }
        }
        require_once(dirname(dirname(__DIR__)).'/views/admin/roles/addView.php');
    }
}