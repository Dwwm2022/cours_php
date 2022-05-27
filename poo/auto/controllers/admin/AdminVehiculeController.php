<?php
class AdminVehiculeController{
    private $avmodel;

    public function __construct()
    {
        $this->avmodel = new AdminVehicleModel();
    }

    public function listVehicles(){
        $vehicles = $this->avmodel->getVehicles();
        require_once(dirname(dirname(__DIR__)).'/views/admin/vehicles/listView.php');
    }
}