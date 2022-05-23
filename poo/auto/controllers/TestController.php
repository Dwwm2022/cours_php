<?php

//die(dirname(__DIR__).'/models/TestModel.php');
require_once(dirname(__DIR__).'/models/TestModel.php');
class TestController{

    private $test_model;

    public function __construct(){
        $this->test_model = new TestModel();
    }

    public function listData(){
        $data = $this->test_model->getData();
        require_once(dirname(__DIR__).'/views/testView.php');
    }
}

$tctr = new TestController();
$tctr->listData();
