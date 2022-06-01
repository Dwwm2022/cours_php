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
        AdminAuthController::isLogged();
        AdminAuthController::accessSuper();
        if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT) && isset($_GET['status'])){
            $id = trim(addslashes(htmlentities($_GET['id'])));
            $status = trim(addslashes(htmlentities($_GET['status'])));
            if($status == 1){
                $status = 0;
            }else{
                $status = 1;
            }

            $user = new User();
            $user->setId_u($id)
                 ->setStatus($status);
            $nb = $this->aumodel->updateUser($user);
            if($nb > 0){
                header('location:index.php?action=list_u');
            }

        }
        $users = $this->aumodel->getUsers();
        require_once(dirname(dirname(__DIR__)).'/views/admin/users/listView.php');
    }
    public function addUser(){
        AdminAuthController::isLogged();
        AdminAuthController::accessSuper();
        $error = "";
        if(isset($_POST['soumis'])){
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $error = '<div class="alert alert-danger text-center fw-bold">L\'email est invalide.</div>';
            }elseif (!preg_match("/[a-zA-Z0-9]{4,8}/", $_POST['pass'])) {
                $error = '<div class="alert alert-danger text-center fw-bold">Le mot de passe est invalide.</div>';
            }else{
                $firstname = trim(addslashes(htmlentities($_POST['firstname'])));
                $lastname = trim(addslashes(htmlentities($_POST['lastname'])));
                $email = trim(addslashes(htmlentities($_POST['email'])));
                $pass = password_hash(trim(addslashes(htmlentities($_POST['pass']))),PASSWORD_DEFAULT) ;
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

    public function connection(){
        $error = "";
        if(isset($_POST['soumis'])){
            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && strlen($_POST['pass']) >= 4){
                $email = trim(addslashes(htmlentities($_POST['email'])));
                $pass = trim(addslashes(htmlentities($_POST['pass'])));
                $user = new User();
                $user->setEmail($email)
                     ->setPass($pass);
                $data_u = $this->aumodel->signIn($user);
                if(!empty($data_u)){
                    if($data_u->getStatus() > 0){
                        if(password_verify($pass, $data_u->getPass())){
                            session_start();
                            $_SESSION['AUTH'] = $data_u;
                            header('location:index.php?action=admin');
                        }else{
                            $error = '<div class="alert alert-danger text-center fw-bold">
                                Votre mot de passe ne correspond pas.
                            </div>'; 
                        }
                    }else{
                        $error = '<div class="alert alert-danger text-center fw-bold">
                         Votre compte est désactivé.
                        </div>';  
                    }
                }else{
                    $error = '<div class="alert alert-danger text-center fw-bold">
                    L\'email n\'existe pas.
                    </div>'; 
                }
            }else{
                $error = '<div class="alert alert-danger text-center fw-bold">
                L\'email ou/et le mot de passe est/sont invalide(s)
                </div>';
            }
        }
        require_once(dirname(dirname(__DIR__)).'/views/admin/users/loginView.php');
    }
}