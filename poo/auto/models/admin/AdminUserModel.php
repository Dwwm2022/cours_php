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

    public function insertUser(User $user){
        $sql = "INSERT INTO user (lastname, firstname, email, pass, role_id) 
                Values(:lastname, :firstname, :email, :pass, :role_id)";
        $userParams = [
                        'lastname'=>$user->getLastname(), 
                        'firstname'=>$user->getFirstname(),
                        'email'=>$user->getEmail(),
                        'pass'=>$user->getPass(),
                        'role_id'=>$user->getRole()->getId_r()
        ];
        $res = $this->getRequest($sql,  $userParams);
        return $res;
    }

    public function updateUser(User $user){
        $sql = "UPDATE user
                SET status = :status
                WHERE id_u = :id_u";
        $res = $this->getRequest($sql, ["status"=>$user->getStatus(), "id_u"=>$user->getId_u()]);
        return $res->rowCount();
    }
}
