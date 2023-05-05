<?php

namespace App;

trait LatteTrait
{

    private string $milkType = 'whole-milk';

    public function makeLatte()
    {
        echo static::class . 'is making Latte'. $this->milkType. PHP_EOL;
    }

    public function setMilkType($milkType):static
    {
        $this->milkType = $milkType;

        return $this;
    }

}