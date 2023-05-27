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
use app\Exception\MissingBillingInfoException;



/* spl_autoload_register(function($class){

   $path =__DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
        if(file_exists($path)){  //psr-4 - can not raise error or waning
            require $path;
        } 
}); */

require_once __DIR__ . '/../vendor/autoload.php';

/* Composer  */

require_once '../vendor/autoload.php';



class Invoice {
    public string $id;

    public function __construct(public float $amount)
    {
        $this->id = random_int(1000, 99999);
    }
}

/*foreach(new Invoice(24) as $key => $value){
   echo $key . ' = ' .  $value;
} */

/* class InvoiceCollection implements \Iterator
{
    public function __construct(public array $invoices)
    {
       
    }

    public function current(): mixed
    {
        echo __METHOD__;
        return current($this->invoices); //return curent element from invoices list
    }

    public function next()
    {
      //pointer to next element
      echo __METHOD__ . PHP_EOL;

      next($this->invoices);
        
    }

    public function key(): mixed
    {
        echo __METHOD__ . PHP_EOL;

        return key($this->invoices); //return a key of currwnt element in array
        
    }

    public function valid(): bool
    {
        echo __METHOD__ . PHP_EOL;
        //if current position valid

        return current($this->invoices) !== false;
        
    }

    public function rewind(): void
    {
        //it is called at beginig of a loop, reset a pointer to beginning

        echo __METHOD__ . PHP_EOL;
        reset($this->invoices);
        
    }


} */

class InvoiceCollection implements \IteratorAggregate // it simplier and better for simple usecase a loop through objects
{
    public function __construct(public array $invoices)
    {
       
    }

   public function getIterator(): Traversable
   {
    return new \ArrayIterator($this->invoices);
    
   }

}

/* WE CAN REPLACE A BUILT-IN ITERATOR WITH DOWN THERE ......*/

$invoiceCollection = new InvoiceCollection([new Invoice(12), new Invoice(43)]);

foreach($invoiceCollection as $invoices){
   /*  var_dump($invoice); */
    echo $invoices->id . ' - ' . $invoices->amount .  PHP_EOL;
}
