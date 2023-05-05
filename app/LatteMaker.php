<?php

namespace App;

use app\LatteTrait;

class LatteMaker

{
    use LatteTrait;


    public function getMilkType(): string
    {
        return $this->milkType;
    }

    
}