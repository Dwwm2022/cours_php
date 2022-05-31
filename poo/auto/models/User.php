<?php

class User{
    private int $id_u = 0;
    private string $lastname = "";
    private string $firstname = "";
    private string $email = "";
    private string $pass = "";
    private bool $status = false;
    private string $date_created_u = "";
    private ? Role $role = null;

    public function __construct()
    {
        $this->role = new Role();
    }

    /**
     * Get the value of id_u
     */ 
    public function getId_u()
    {
        return $this->id_u;
    }

    /**
     * Set the value of id_u
     *
     * @return  self
     */ 
    public function setId_u($id_u)
    {
        $this->id_u = $id_u;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of pass
     */ 
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of date_created_u
     */ 
    public function getDate_created_u()
    {
        return $this->date_created_u;
    }

    /**
     * Set the value of date_created_u
     *
     * @return  self
     */ 
    public function setDate_created_u($date_created_u)
    {
        $this->date_created_u = $date_created_u;

        return $this;
    }
}