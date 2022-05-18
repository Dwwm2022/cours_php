<?php
    abstract class Compte2{
        
        protected string $titulaire = "";
        protected string $numero = "";
        protected float $solde = 0.0;

        public function __construcct($t,$n,$s){
            $this->titulaire = $t;
            $this->numero = $n;
            $this->solde = $s;
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
         * Get the value of solde
         */ 
        public function getSolde()
        {
                return $this->solde;
        }

        public function depot(float $montant){
            $this->solde += $montant;
        }

        public function affichage(){
                
            return "Numero: ".$this->numero." Titulaire: ".$this->titulaire." Solde: ".$this->solde.".<br/>";
        }

        abstract function retrait(float $montant);
    }
?>