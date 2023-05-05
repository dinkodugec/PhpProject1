<?php

namespace App;

trait CappuccinoTrait
{

    /* use LatteTrait;  */ //you can use trait inside a trait also, so CappuccinoTrait will be able access to makeLatte()

    private function makeCappuccino()
     /*you can access private method in class which use a trait and only there, 
                             not outside a class that use a trait         */
    {
        echo static::class . 'is making cappuccino with ' . PHP_EOL;
    }

}