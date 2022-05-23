<?php
class TestModel{
    private $data = [];

    public function getData(){
        $this->data = [
            ["id_v" => 1, "marque" => "Peugeot", "modele"=>"5008", "country"=>"France","year" => 2002,"description"=>"La voiture de rêve", "available"=>true,"price "=>15000, "quantity" => 58, "category"=>["id_cat" =>1,"nom_cat"=>"voiture" ]]
        ];

        return $this->data;
    }
}