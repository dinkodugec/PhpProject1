<?php

namespace App;

trait CappuccinoTrait
{

    private function makeCappuccino()
     /*you can access private methodin class which use a trait and only there, 
                             not outside a class that use a trait         */
    {
        echo static::class . 'is making cappuccino' . PHP_EOL;
    }

}