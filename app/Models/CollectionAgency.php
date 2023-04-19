<?php

namespace app\Models;

class CollectionAgency implements CollectPackage
{
   
 
    public function __construct()
    {
          
    }


    public function feeCollect(float $amountPerPack, int $numPack)
    {
        $fee = $amountPerPack * $numPack;
        return $fee;
    }
    public function nameOfCollector($name)
    {
       return $name;
    }

}

?>