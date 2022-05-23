<?php

class AdminCategoryModel extends Driver{

    public function getCategories(){
        $sql = "SELECT * FROM category";
        $res = $this->getRequest($sql);
        $rows = $res->fetchAll(PDO::FETCH_OBJ);

        //ORM
        $tabCat = [];

        foreach ($rows as $row) {
            $cat = new Category();
            $cat->setId_cat($row->id_cat);
            $cat->setNom_cat($row->nom_cat);

            array_push($tabCat,$cat);
        }
        return $tabCat;
    }
}