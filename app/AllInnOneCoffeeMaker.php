<?php

namespace app;

use App\CappuccinoTrait;
use App\LatteTrait;

class AllInnOneCoffeeMaker extends CoffeeMaker
{
     use CappuccinoTrait;
     use CappuccinoTrait {
          CappuccinoTrait::makeCappuccino as public; //so it is solved in this way to access private method as a public
      }  

      protected string $milkType = 'whole-milk'; 

      public function getMilkType(): string
      {
          return $this->milkType;
      }
  

}