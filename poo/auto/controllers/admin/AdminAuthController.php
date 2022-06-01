<?php

session_start();
class AdminAuthController{
    public static function isLogged(){
        if(!isset($_SESSION['AUTH'])){
            header('location:index.php?action=login');
            exit;
        }
    }

    public static function signOut(){
        unset($_SESSION['AUTH']);
        header('location:index.php?action=login');
        exit;
    }

    public static function accessSuper(){
        if($_SESSION['AUTH']->getRole()->getId_r() != 2){
            header('location:index.php?action=login');
            exit;
        }
    }

    public static function accessAdmin(){
        if($_SESSION['AUTH']->getRole()->getId_r() > 2){ 
            header('location:index.php?action=login');
            exit;
        }
    }
}