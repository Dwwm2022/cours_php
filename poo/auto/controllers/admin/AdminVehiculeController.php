<?php
class AdminVehiculeController{
    private $avmodel;

    public function __construct()
    {
        $this->avmodel = new AdminVehicleModel();
        $this->acmodel = new AdminCategoryModel();
    }

    public function listVehicles(){
        if(isset($_POST['soumis']) && !empty($_POST['search'])){
            $search = trim(addslashes(htmlentities($_POST['search'])));
            $vehicles = $this->avmodel->getVehicles($search);
        }else{
            $vehicles = $this->avmodel->getVehicles();
        }
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
    public function addVehicle(){
        if(isset($_POST['soumis']) && !empty($_POST['marque']) && !empty($_POST['price'])){
            $marque = trim(addslashes(htmlspecialchars($_POST['marque'])));
            $modele = trim(addslashes(htmlspecialchars($_POST['modele'])));
            $country = trim(addslashes(htmlspecialchars($_POST['country'])));
            $price = trim(addslashes(htmlspecialchars($_POST['price'])));
            $quantity = trim(addslashes(htmlspecialchars($_POST['quantity'])));
            $year = trim(addslashes(htmlspecialchars($_POST['year'])));
            $cat = trim(addslashes(htmlspecialchars($_POST['cat'])));
            $description = trim(addslashes(htmlspecialchars($_POST['description'])));
            $image = $_FILES['image']['name'];

            $destination = './assets/images/';
            move_uploaded_file($_FILES['image']['tmp_name'], $destination.$image);

            $newVeh = new Vehicle();
            //$newCat = new Category();
            //$newCat->setId_cat($cat);
            $newVeh->setMarque($marque)
                   ->setModele($modele)
                   ->setCountry($country) 
                   ->setYear($year)
                   ->setPrice($price)
                   ->setQuantity($quantity)
                   ->setDescription($description)
                   ->setImage($image)
                   ->getCategory()->setId_cat($cat);
                   //->setCategory($newCat);
            
            $ok = $this->avmodel->insertVehicle($newVeh);
            if($ok){
                header('location:index.php?action=list_veh');
            }

        }
        $categories = $this->acmodel->getCategories();
        require_once(dirname(dirname(__DIR__)).'/views/admin/vehicles/addView.php');
    }

    public function editVehicle(){
        if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT) ){
            $id = trim(htmlentities(addslashes($_GET['id'])));
            $item_veh = new Vehicle();
            $item_veh->setId_v($id);
            $vehObj = $this->avmodel->editVehicle($item_veh);
            
            $categories = $this->acmodel->getCategories();
            require_once(dirname(dirname(__DIR__)).'/views/admin/vehicles/editView.php');
        }
    }
}

