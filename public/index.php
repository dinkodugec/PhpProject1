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



/* Serialization is process of converting a value in string form 
  you can serialize and objects - it serialze properties and values, like class name but not serialize methods
Resource types and closures can not be serialize
Never pass unsecure data in unserialize function
*/

/* echo serialize(true);
echo serialize(1);
echo serialize(2.5);
echo serialize('hello world');
echo serialize([1,2,3]);
echo serialize(['a'=>1, 'b'=>2]);  */

/* var_dump(unserialize(serialize(['a'=>1, 'b'=>2]))); */

/* echo serialize($pack1); */

/* var_dump (unserialize()); */

class Invoice 
{
     public string $id;

     public function __construct(
        public float $amount,
        public string $description,
        public string $creditCardNumber
     )
     {
        $this->id= uniqid('invoice');
     }

 /*      //called before object is serialize- you can hook some event preserialzation to clean 
      // some property example
     public function __sleep()
     {
        return ['id', 'amount']; //it would only serialize id and amount
     }

     public function __wakeup() //called afterobject is unserialize
     {
        
     } THEY ARE REDUNDED */

     /* serialize and __unserialze magic methods are some improvments of __sleep 
     and __wake.... act like interface  */

     public function __serialize(): array
     {
        /* you have full control how object is serialize 
        must return array that represent object, it is not limited to propertires
        it can return aray with key=>value pair that describe object besides properties */
        return [
            'id' => $this->id,
            'amount' => $this->amount,
            'description'=>$this->description,
            'creditCardNumber'=>base64_encode($this->creditCardNumber) ,
            'foo'=> 'bar',
        ];
     }

     //when you have both sleep() and serialze() method, serialize method will be called and sleep will be ingored


     //called after object is unserialize
     public function __unserialize(array $data): void //$data which is serialized is argument
     {
         $this->id = $data['id'];
        $this->amount = $data['amount'];
        $this->description = $data['description'];
        $this->creditCardNumber = base64_encode($data['creditCardNumber']);
       
     }
 




}

$invoice = new Invoice(25, 'invoice 1', '12334455666');

$str = serialize($invoice);  //only serialize id and amount


$invoice2 = unserialize($str); //now get data back from serialize, and we can restore a object or something else
/* echo $str; */

var_dump($invoice2); //we get properly structured an object