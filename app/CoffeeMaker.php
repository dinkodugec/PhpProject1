<?php
namespace app;

class CoffeeMaker
{
     public static $foo;
     
    public function makeCoffe()
    {
        echo static::class . 'is making coffee' . PHP_EOL;
    }


}