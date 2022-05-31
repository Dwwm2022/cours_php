<?php

class AdminUserModel extends Driver
{
    public function getUsers()
    {
        $sql = "SELECT * FROM user 
            INNER JOIN role
            ON user.role_id = role.id_r";
        $res = $this->getRequest($sql);

        $rows = $res->fetchAll(PDO::FETCH_OBJ);
        $tabUsers = [];
        foreach ($rows as  $row) {
            $user = new User();
            $user->setId_u($row->id_u)
                ->setLastname($row->lastname)
                ->setFirstname($row->firstname)
                ->setEmail($row->email)
                ->setStatus($row->status)
                ->getRole()->setName_r($row->name_r)
                ->setDate_created_r($row->date_created_r);

            array_push($tabUsers, $user);
        }

        return $tabUsers;
    }
}
