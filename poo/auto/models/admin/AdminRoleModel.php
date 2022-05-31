<?php

class AdminRoleModel extends Driver{

    public function getRoles(){
        $sql = "SELECT * FROM role";
        $res = $this->getRequest($sql);

        $rows = $res->fetchAll(PDO::FETCH_OBJ);
        $tabRoles = [];
        foreach ($rows as  $row) {
            $role = new Role();
            $role->setId_r($row->id_r)
                 ->setName_r($row->name_r)
                 ->setDate_created_r($row->date_created_r);

            array_push($tabRoles, $role);
        }

        return $tabRoles;
    }

}