<?php

class Role{
    private int $id_r = 0;
    private string $name_r = "";
    private string $date_created_r = "";

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
     * Get the value of name_r
     */ 
    public function getName_r()
    {
        return $this->name_r;
    }

    /**
     * Set the value of name_r
     *
     * @return  self
     */ 
    public function setName_r($name_r)
    {
        $this->name_r = $name_r;

        return $this;
    }

    /**
     * Get the value of date_created_r
     */ 
    public function getDate_created_r()
    {
        return $this->date_created_r;
    }

    /**
     * Set the value of date_created_r
     *
     * @return  self
     */ 
    public function setDate_created_r($date_created_r)
    {
        $this->date_created_r = $date_created_r;

        return $this;
    }
}