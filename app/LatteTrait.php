<?php

namespace App;

trait LatteTrait
{

    public function makeLatte()
    {
        echo static::class . 'is making Latte'. $this->getMilkType() . PHP_EOL;
    }


    abstract public function getMilkType(): string;
/*     if you mark some method abstract in trait, it should not be class, trait be abstract
 */
}