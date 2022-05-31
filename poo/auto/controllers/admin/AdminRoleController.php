<?php

class AdminRoleController{
    private $armodel;

    public function __construct()
    {
        $this->armodel = new AdminRoleModel();
    }

    public function listRoles(){
        $roles = $this->armodel->getRoles();
        require_once(dirname(dirname(__DIR__)).'/views/admin/roles/listView.php');
    }

    public function addRole(){
        require_once(dirname(dirname(__DIR__)).'/views/admin/roles/addView.php');
    }
}