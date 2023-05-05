<?php

namespace App;

use app\LatteTrait;

class LatteMaker

{
    use LatteTrait;

    protected string $milkType = 'whole-milk';  // define a properties in trait and access them in class that use trait

    public function getMilkType(): string
    {
        return $this->milkType;
    }

    
}