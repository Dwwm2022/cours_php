<?php

class AdminVehicleModel extends Driver{

    public function getVehicles($search = null){
        if(!empty($search)){
            $sql = "SELECT * FROM vehicle INNER JOIN category
            ON vehicle.category_id = category.id_cat
            WHERE marque LIKE :marque OR modele LIKE :modele OR nom_cat LIKE :nom_cat
            ORDER BY id_v DESC";
            $searchParams = ["marque"=>"$search%", "modele"=>"$search%", "nom_cat"=>"$search%"];
            $res = $this->getRequest($sql,$searchParams);
        }else{
            $sql = "SELECT * FROM vehicle INNER JOIN category
            ON vehicle.category_id = category.id_cat
            ORDER BY id_v DESC";
            $res = $this->getRequest($sql);
        }
        $lines = $res->fetchAll(PDO::FETCH_OBJ);

        $tabVeh = [];

        foreach($lines as $line){
            $cat = new Category();
            $veh = new Vehicle();
            $cat->setId_cat($line->category_id);
            $cat->setNom_cat($line->nom_cat);
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

    public function deleteVehicle(Vehicle $veh){

        $sql = "DELETE FROM vehicle WHERE id_v = :id";
        $res = $this->getRequest($sql, ['id'=>$veh->getId_v()]);
        $nb = $res->rowCount();
        return $nb;
    }


}