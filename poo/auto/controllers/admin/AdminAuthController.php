<?php

class AdminAuthController{

    public static function isLogged(){
        if(!isset($_SESSION['AUTH'])){
            header('location:index.php?action=login');
            exit;
        }
    }

    public static function logout(){
        unset($_SESSION['AUTH']);
        header('location:index.php?action=login');
        exit;
    }
}