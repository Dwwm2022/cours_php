<?php

class Person{

    public $nom = "";
    public $age = 0;

    public function affichage():string{
        return "Nom: ".$this->nom.", Age: ".$this->age."ans";
    }

    public function isMineur():bool{
        if($this->age >= 18){
            return true;
        }else{
            return false;
        }
    }
}

