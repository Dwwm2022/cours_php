<?php

class AdminUserController{
    private $aumodel;
    private $armodel;

    public function __construct()
    {
        $this->aumodel = new AdminUserModel();
        $this->armodel = new AdminRoleModel();
    }

    public function listUsers(){
        $users = $this->aumodel->getUsers();
        require_once(dirname(dirname(__DIR__)).'/views/admin/users/listView.php');
    }
    public function addUser(){
        $error = "";
        if(isset($_POST['soumis'])){
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $error = '<div class="alert alert-danger">L\'email est invalide.</div>';
            }elseif (!preg_match("/[a-zA-Z0-9]{4,8}/", $_POST['pass'])) {
                $error = '<div class="alert alert-danger">Le mot de pass est invalide.</div>';
            }else{
                $firstname = trim(addslashes(htmlentities($_POST['firstname'])));
                $lastname = trim(addslashes(htmlentities($_POST['lastname'])));
                $email = trim(addslashes(htmlentities($_POST['email'])));
                $pass = password_hash(trim(addslashes(htmlentities($_POST['firstname']))),PASSWORD_DEFAULT) ;
                $role = trim(addslashes(htmlentities($_POST['role'])));

               $newUser = new User();
               $newUser->setLastname($lastname)
                       ->setFirstname($firstname)
                       ->setEmail($email)
                       ->setPass($pass)
                       ->getRole()->setId_r($role);
               $isOk = $this->aumodel->insertUser($newUser);
               if($isOk){
                   header('location:index.php?action=list_u');
               }
            }
        }
        $roles = $this->armodel->getRoles();
        require_once(dirname(dirname(__DIR__)).'/views/admin/users/addView.php');
    }
}