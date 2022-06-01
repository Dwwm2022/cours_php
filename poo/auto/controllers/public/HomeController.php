<?php

class HomeController{
    public function listVehicles(){
        require_once(dirname(dirname(__DIR__)).'/views/public/vehicles/listView.php');
    }
}