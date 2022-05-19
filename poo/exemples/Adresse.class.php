<?php
namespace identite;
class Adresse{
    private int $numero = 0;
    private string $rue = "";
    private int $code_postal = 0;
    private string $ville = "";

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
     * Get the value of rue
     */ 
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set the value of rue
     *
     * @return  self
     */ 
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get the value of code_postal
     */ 
    public function getCode_postal()
    {
        return $this->code_postal;
    }

    /**
     * Set the value of code_postal
     *
     * @return  self
     */ 
    public function setCode_postal($code_postal)
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }
}