<?php

class AdminUserController{
    private $aumodel;

    public function __construct()
    {
        $this->aumodel = new AdminUserModel();
    }

    public function listUsers(){
        $users = $this->aumodel->getUsers();
        require_once(dirname(dirname(__DIR__)).'/views/admin/users/listView.php');
    }
}