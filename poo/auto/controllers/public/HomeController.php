<?php
session_start();
require './vendor/autoload.php';
class HomeController
{
    private $avmodel;
    private $acmodel;
    private $phmodel;

    public function __construct()
    {
        $this->avmodel = new AdminVehicleModel();
        $this->acmodel = new AdminCategoryModel();
        $this->phmodel = new HomeModel();
    }
    public function listVehicles()
    {
        if (isset($_POST['soumis']) && !empty($_POST['search'])) {
            $search = trim(addslashes(htmlentities($_POST['search'])));
            $vehicles = $this->avmodel->getVehicles($search);
        } else {
            $vehicles = $this->avmodel->getVehicles();
        }
        require_once(dirname(dirname(__DIR__)) . '/views/public/vehicles/listView.php');
    }

    public function detail()
    {
        if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {

            $id = trim(htmlentities(addslashes($_GET['id'])));
            $detail_veh = new Vehicle();
            $detail_veh->setId_v($id);
            $vehObj = $this->phmodel->itemVehicle($detail_veh);

            require_once(dirname(dirname(__DIR__)) . '/views/public/vehicles/detailView.php');
        }
    }
    
    
    public function payment()
    {
        if (isset($_POST) && !empty($_POST['email']) && !empty($_POST['quantite'])) {
           
            \Stripe\Stripe::setApiKey('sk_test_51IM8YvEO2Yrc49j4dgti1ArXHb9ZDqFBXbQv21rjVJ0TzUoiCZNhm8GpMOpUf1MHxnAg7bjWhRtHuH5AcWyjg4Df00uTkqrzjm');

            header('Content-Type: application/json');

            $checkout_session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'eur',
                        'unit_amount' => $_POST['prix'] * 100,
                        'product_data' => [
                            'name' => $_POST['marque'] . "-" . $_POST['modele'],
                            'images' => ["./assets/images/clio2.jpg"],
                        ],
                    ],
                    'quantity' => $_POST['quantite'],
                ]],
                'customer_email' => $_POST['email'],
                'mode' => 'payment',
                'success_url' => 'http://localhost/cours_php/poo/auto/index.php?action=success',
                'cancel_url' => 'http://localhost/cours_php/poo/auto/index.php?action=cancel',
            ]);
            unset($_SESSION['Auth']);
            $_SESSION['pay'] = $_POST;
            echo json_encode(['id' => $checkout_session->id]);
        }
    }

    public function confirmation()
    {
        $newStock = (int)$_SESSION['pay']['nb'] - (int)$_SESSION['pay']['quantite'];
        $veh = new Vehicle();
        $veh->setId_v($_SESSION['pay']['id']);
        $veh->setQuantity($newStock);

        $nbLine = $this->phmodel->updateStock($veh);
        require_once(dirname(dirname(__DIR__)) . '/views/public/vehicles/success.php');
    }

    public function annuler()
    {
        require_once(dirname(dirname(__DIR__)) . '/views/public/vehicles/cancel.php');
    }
    public function about(){
        require_once(dirname(dirname(__DIR__)) . '/views/public/vehicles/aboutView.php'); 
    }
    public function contact(){
        require_once(dirname(dirname(__DIR__)) . '/views/public/vehicles/contactView.php');
    }
    public function news(){
        require_once(dirname(dirname(__DIR__)) . '/views/public/vehicles/newsView.php');
    }
}
