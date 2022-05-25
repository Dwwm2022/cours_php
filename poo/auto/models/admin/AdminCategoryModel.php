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
            $cat->date_created = $row->date_created_cat;

            array_push($tabCat,$cat);
        }
        return $tabCat;
    }

    public function insertCategory(Category $cat){
        $sql = "INSERT INTO category (nom_cat) Values(:nom)";
        $res = $this->getRequest($sql, ['nom'=>$cat->getNom_cat()]);
        return $res;
    }
    public function deleteCategory(Category $cat){

        $sql = "DELETE FROM category WHERE id_cat = :id";
        $res = $this->getRequest($sql, ['id'=>$cat->getId_cat()]);
        $nb = $res->rowCount();
        return $nb;
    }

    public function categoryItem(Category $cat){

        $sql = "SELECT * FROM category WHERE id_cat = :id";
        $res = $this->getRequest($sql, ['id'=>$cat->getId_cat()]);

        if($res->rowCount() > 0){
            $row = $res->fetch(PDO::FETCH_OBJ);
            $cat_edit = new Category();
            $cat_edit->setId_cat($row->id_cat);
            $cat_edit->setNom_cat($row->nom_cat);

            return $cat_edit;
        }
    }
}
// $testCat = new Category();
// $testCat->setId_cat(3);
// $acmodel = new AdminCategoryModel();
// $result = $acmodel->categoryItem($testCat);
// var_dump($result);