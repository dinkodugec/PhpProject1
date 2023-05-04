<?php

namespace App;

use app\CappuccinoTrait;

class CappuccinoMaker
{

    use CappuccinoTrait;  //you can not instantiete object of trait

/*     public function makeCappuccino()
    {
        echo static::class . 'is making updated cappuccino' . PHP_EOL;
    } 

    method that is defined in trait, and class that use that trait
    can override method from trait and that method from class will be called
    
    */

}