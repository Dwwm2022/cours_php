<?php

class CompteSansDecouvert extends Compte2{

    public function retrait(float $montant)
    {
        if($this->solde - $montant > 0){
            $this->solde -= $montant;
        }
    }
    
}