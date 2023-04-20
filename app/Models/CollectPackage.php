<?php

namespace app\Models;


/* you can not have properties in interface but can have constants and can not be overritten
 *//* interface CollectPackage extends NewCollect, SomeOtherCollect Interface - all interfaces must e implemented in child class
 */interface CollectPackage
{


    public function __construct();

    public function feeCollect(float $amountPerPack,int $numPack);
    public function nameOfCollector($name);
    
}



// all methods that provide interface must be be implemented in child class and must be be public
//you can inherit multiple intrfaces