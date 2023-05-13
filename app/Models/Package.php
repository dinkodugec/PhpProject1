<?php

namespace app\Models;


class Package

{

   protected float $weights = 2.5; 
    protected $deliveryType =null;
    protected $id = "";

    
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
    
     public function doNotMakeLikeThis()
    {
        return "some lorem ipsum";
    }

    /* This method is automaically called when object is cloned, not __construct is called
    in method down you can clean some properties etc.. */
    public function __clone()
    {
        $this->id = uniqid('invoice');
    }
    
    

    
}