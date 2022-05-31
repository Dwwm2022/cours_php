<?php

class Role{
    private int $id_r = 0;
    private string $name_u = "";
    private string $date_created_u = "";

    /**
     * Get the value of id_r
     */ 
    public function getId_r()
    {
        return $this->id_r;
    }

    /**
     * Set the value of id_r
     *
     * @return  self
     */ 
    public function setId_r($id_r)
    {
        $this->id_r = $id_r;

        return $this;
    }

    /**
     * Get the value of name_u
     */ 
    public function getName_u()
    {
        return $this->name_u;
    }

    /**
     * Set the value of name_u
     *
     * @return  self
     */ 
    public function setName_u($name_u)
    {
        $this->name_u = $name_u;

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