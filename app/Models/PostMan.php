<?php

namespace app\Models;


class PostMan implements CollectPackage
{

    public function __construct()
    {

    }

    public function feeCollect(float $amountPerPack, int $numPack)
    {
        return $amountPerPack + $numPack;
    }

    public function nameOfCollector($name)
    {
        return $name;
    }


}