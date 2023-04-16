<?php

namespace app\Models;

// is Paperpackage(child class) parent class - USE IT always when think to use inheritance
class PaperPackage extends Package

{
 

    
    public function __construct(float $weights,  string $deliveryType)
    {
       /*  parent::__construct($weights, $deliveryType); */ //also __construct can be called from parent class
        $this->weights = $weights;
        $this->deliveryType = $deliveryType;
    }

    public function deliveryPack(): string //also in parent class return type must be the same type
    {
        return "Package will be deliver by" . " " . $this->deliveryType;  
    }

    
   public function get_Pack()
     {
        return $this->weights;
     }

     public function doNotMakeLikeThis()
     {
         throw new \Exception("overriting parent method in force to disable method inhertiance 
         , is not good practice, try something else");
     }
     
}