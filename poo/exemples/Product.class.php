<?php

class Product{
    private string $reference = "";
    private float $price = 0.0;
    private string $description = "";
    private array $data = [];

    public function __construct($r, $p, $d)
    {
        $this->reference = $r;
        $this->price = $p;
        $this->description = $d;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        if(isset($this->data[$name])){
            return $this->data[$name];
        }
    }

    public function __toString()
    {
        return "Reference: ".$this->reference." Prix: ".$this->price." Description: ".$this->description;
    }
}