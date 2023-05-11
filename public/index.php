<?php

use app\AllInnOneCoffeeMaker;
use app\LatteTrait;
use app\LatteMaker;
use app\CappuccinoTrait;
use app\CappuccinoMaker;
use app\Enums\Status;
use app\Models\FancyGiftPackage;
use app\Models\Flight;
use app\Models\Package;
use app\Models\PaperPackage;
use app\Models\CollectPackageService;
use app\Models\PaymentGatway\Paddle\Transaction;
use app\Models\OrderInterface;
use app\Models\WebOrder;
use app\Models\Order;
use app\Models\ShopOrder;


/* spl_autoload_register(function($class){

   $path =__DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
        if(file_exists($path)){  //psr-4 - can not raise error or waning
            require $path;
        } 
}); */

require_once __DIR__ . '/../vendor/autoload.php';

/* Composer  */

require_once '../vendor/autoload.php';




 $pack1 = new Package(3, 'ship'); 
 $pack2= new Package(3,'ship');

 $pack3 = $pack1;
 echo '$pack1' === '$pack3'. PHP_EOL;
var_dump('$pack1' === '$pack3');  //return true, it references to the same point in memory; ZEND container, similiar like assign by reference in variable

echo '$pack1' == '$pack2' . PHP_EOL;
var_dump('$pack1' == '$pack2'); //comparision operator
//two objects will be equal if they are objects of two same classes, with same properties and values for them

echo '$pack1' === '$pack2'. PHP_EOL;
var_dump('$pack1' === '$pack2'); //identiy operator
// will be the same if they point to same instance from same class



