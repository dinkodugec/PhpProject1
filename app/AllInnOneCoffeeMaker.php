<?php

namespace app;

use App\CappuccinoTrait;
use App\LatteTrait;

class AllInnOneCoffeeMaker extends CoffeeMaker
{
     use CappuccinoTrait{
          CappuccinoTrait::makeLatte as MakeOrginalLatte;
     }
     use LatteTrait{
          LatteTrait::makeLatte insteadOf CappuccinoTrait; //when is conflict from same method names in traits
     }

}