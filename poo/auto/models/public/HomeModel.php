<?php

class HomeModel extends Driver
{

    public function itemVehicle(Vehicle $veh)
    {
        $sql = "SELECT * FROM vehicle
        INNER JOIN category
        ON vehicle.category_id = category.id_cat
        WHERE id_v = :id";
        $res = $this->getRequest($sql, ['id' => $veh->getId_v()]);

        if ($res->rowCount() > 0) {
            $line = $res->fetch(PDO::FETCH_OBJ);
            $veh = new Vehicle();
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
                ->getCategory()->setId_cat($line->id_cat)
                ->setNom_cat($line->nom_cat);
            return $veh;
        }
    }

    public function updateStock(Vehicle $veh)
    {
        $sql = "UPDATE vehicle SET quantity = :quantity WHERE id_v = :id";
        $result = $this->getRequest($sql, ['quantity' => $veh->getQuantity(), 'id' => $veh->getId_v()]);
        return $result->rowCount();
    }
}
