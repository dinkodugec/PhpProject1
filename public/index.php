<?php

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


/* spl_autoload_register(function($class){

   $path =__DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
        if(file_exists($path)){  //psr-4 - can not raise error or waning
            require $path;
        } 
}); */

require_once __DIR__ . '/../vendor/autoload.php';

/* Composer  */

require_once '../vendor/autoload.php';


$transanction = new Transaction(25);


 $transanction->process();

 $pack1 = new Package(2,3 , 'ship'); 
 $packPap = new PaperPackage(3.4 , 'ship');
 echo $packPap->get_Pack();
 echo $packPap->deliveryPack();

 function typeHintingOfObject( PaperPackage $packPap)
 {
    $packPap->deliveryPack();
 }

 echo typeHintingOfObject($packPap);

 $gift = new FancyGiftPackage($packPap );
 echo $gift->deliveryPack(); 

 $or = new Order(new WebOrder());
 echo $or->order->getOrder();

