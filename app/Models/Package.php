<?php

namespace app\Models;


class Package

{

  private float $weights = 2.5; 
    private $deliveryType =null;
 

    
    public function __construct(float $weights,  string $deliveryType)
    {
        $this->weights = $weights;
        $this->deliveryType = $deliveryType;
    }

    public function deliveryPack(): string //also in child class return type must be the same type
    {
        return "Package will be deliver by" . " " . $this->deliveryType;  
    }

   final public function foo()
    {
        return "Final keyword is used to disable class inhertinace and method inheritance";
    }
    
 

    
    

    
}