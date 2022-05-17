<?php

class Compte{
   private string $numero = "";
   private string $titulaire = "";
   private float $solde = 0.0;
   
    public function __construct($n, $t, $s)
    {
        echo "Appel du constructeur <br/>";
        $this->numero = $n;
        $this->titulaire = $t;
        $this->solde = $s;
    }
   /**
    * Get the value of numero
    */ 
   public function getNumero()
   {
      return $this->numero;
   }

   /**
    * Set the value of numero
    *
    * @return  self
    */ 
   public function setNumero($numero)
   {
      $this->numero = $numero;

      return $this;
   }

   /**
    * Get the value of titulaire
    */ 
   public function getTitulaire()
   {
      return $this->titulaire;
   }

   /**
    * Set the value of titulaire
    *
    * @return  self
    */ 
   public function setTitulaire($titulaire)
   {
      $this->titulaire = $titulaire;

      return $this;
   }

   /**
    * Get the value of solde
    */ 
   public function getSolde()
   {
      return $this->solde;
   }

   public function depot($montant){
       
       $this->solde = $this->solde + $montant;
   }
}