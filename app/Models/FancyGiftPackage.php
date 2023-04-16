<?php

namespace app\Models;

class FancyGiftPackage  
{
    public float $weights = 2.5; 
    public string $deliveryType ="";

    //class has PapercPackage functionality but we do not 
    //use inhertiance, we use composition
  

  public function __construct(private PaperPackage $packPap )
  {
    
  }


  public function fancyRibbon()
  {

  }

  public function bow()
  {

  }

  
  public function deliveryPack() 
  {
    $this->packPap ->deliveryPack();
  }



}