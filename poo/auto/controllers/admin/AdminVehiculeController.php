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

    public function removeVeh(){
        if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT) ){
            $id = trim(htmlentities(addslashes($_GET['id'])));
            $delete_veh = new Vehicle();
            $delete_veh->setId_v($id);
            $num = $this->avmodel->deleteVehicle($delete_veh);
            if($num == 1){
                header('location:index.php?action=list_veh');
            }
        }
    }
}