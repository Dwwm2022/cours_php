<?php

class AdminUserController{
    private $aumodel;

    public function __construct()
    {
        $this->aumodel = new AdminUserModel();
    }
}