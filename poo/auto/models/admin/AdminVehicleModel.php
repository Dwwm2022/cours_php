<?php

class AdminVehicleModel extends Driver{

    public function getVehicles(){
        $sql = "SELECT * FROM vehicle";
        $res = $this->getRequest($sql);
        $lines = $res->fetchAll(PDO::FETCH_OBJ);

        $tabVeh = [];

        foreach($lines as $line){
            $cat = new Category();
            $veh = new Vehicle();
            $cat->setId_cat($line->category_id);
            $veh->setId_v($line->id_v)
                ->setMarque($line->marque)
                ->setModele($line->modele)
                ->setCountry($line->country)
                ->setYear($line->year)
                ->setImage($line->image)
                ->setDescription($line->description)
                ->setAvailable($line->available)
                ->setPrice($line->price)
                ->setQuantity($line->quantity)
                ->setDate_created_v($line->date_created_v)
                ->setCategory($cat);

            array_push($tabVeh, $veh);
        }
        return $tabVeh;
    }

}