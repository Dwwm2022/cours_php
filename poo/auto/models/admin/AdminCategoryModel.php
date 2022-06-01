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

    public function updateCategory(Category $cat){
        $sql = "UPDATE category SET nom_cat = :nom WHERE id_cat = :id";
        $res = $this->getRequest($sql, ['nom'=>$cat->getNom_cat(), 'id'=>$cat->getId_cat()]);
        return $res;
    }

    public function getData(){
        $sqlc = "SELECT * FROM category";
        $resc = $this->getRequest($sqlc);

        $sqlv = "SELECT * FROM vehicle";
        $resv = $this->getRequest($sqlv);

        $sqlr = "SELECT * FROM role";
        $resr = $this->getRequest($sqlr);

        $sqlu = "SELECT * FROM user";
        $resu = $this->getRequest($sqlu);

        return ['nbc'=>$resc->rowCount(), 'nbv'=>$resv->rowCount(), 'nbr'=>$resr->rowCount(), 'nbu'=>$resu->rowCount()];
    
    }
}
