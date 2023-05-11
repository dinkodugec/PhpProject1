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

 $or = new Order(new ShopOrder());
 echo $or->order->getOrder();


$LatteMaker = new LatteMaker();
$LatteMaker-> makeLatte(); 

$cappuccinoMaker = new CappuccinoMaker();
$cappuccinoMaker-> makeCappuccino();

$allinone = new AllInnOneCoffeeMaker;
$allinone->makeCoffe(); // extending from Coffe-maker class
$allinone->makeCappuccino(); //from traits CappuccinoTrait


//traits are just like COPY and PASTE;  it just take  code from traits and use in class which use trait

/* it is able to redefine method that is defined in a trait so method 
that is called from class that use trait has precedence
*/

/* When use a static properties in inhertance, static propertires is shared and when we change a value it is affected to orginal class
but in traits, static properties is not shared and every class that use traits has his own version   */

/* VERY SIMPLE - USE TRAITS TO CODE REPETITION */
/* Main usecases of using anonymus classes is testing */
/* $obj = new class(1,2,3) { //anonymus classes- can use interface, inhertiance, traits etc
   public function __construct(public $x, public int $y, public int $z)
   {
      
   }
};

var_dump($obj); */

$obj = new classA (1, 2);

var_dump($obj->bar(2));

class classA 
{
   public function __construct(public $x, public int $y)
   {
      
   }

   public function foo()
   {
      return 'foo';
   }

   public function bar(): object
   {
      return new class {
         public function __construct()
         {

         }
       
      };
   }
}



