<?php

class Compte{
   private string $numero = "";
   private string $titulaire = "";
   private float $solde = 0.0;
   const TYPE_1 = "Compte Courant";
   const TYPE_2 = "Compte d'épargne";
   private static $plafond  = 1200;
   private static $nb_obj = 0;
   
    public function __construct($n, $t, $s)
    {
        echo "Appel du constructeur <br/>";
        $this->numero = $n;
        $this->titulaire = $t;
        $this->solde = $s;
        self::$nb_obj += 1;
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

   public function depot(float $montant):void{

       $this->solde = $this->solde + $montant;
   }

   public function retrait(float $montant):void{
      $this->solde = $this->solde - $montant;
   }

   public function virement(float $montant, Compte $compte_destination){
      $this->retrait($montant);
      $compte_destination->depot($montant);
   }
   
   /**
    * Get the value of plafond
    */ 
    public static function getPlafond()
    {
       return self::$plafond;
      }
      
      /**
       * Set the value of plafond
       *
       * @return  self
       */ 
      public static function setPlafond($plafond)
      {
         self::$plafond = $plafond;
         
      }
      
      /**
       * Get the value of nb_obj
       */ 
      public static function getNb_obj()
      {
         return self::$nb_obj;
      }
      public function __destruct()
      {
          //echo "destruction de l'objet";
      }
   }