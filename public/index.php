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




 $pack1 = new Package(3, 'ship'); 
 $pack2= new Package(3,'ship');

 set_exception_handler(function(\Throwable $e) {  //register global exception handler
    var_dump($e->getMessage());
 });

 class Customer
 {

        public $billingInfo = ""; 

    public function __construct($billingInfo= [])
    {
        
    }

    public function getBillingInfo()
    {
         return $this->billingInfo;
    }



 }


 class Invoice 
 {
    public function __construct(public Customer $customer)
    {
        
    }

    public function process($amount): void
    {

        if($amount < 0){
            /*  throw  MissingBillingInfoException::missingInfo(); calling static metod */
           //classic built_in exception class
      /*        throw new \Exception('Invalid invoice amount'); this is base exception in PHP */
        /*      throw new \InvalidArgumentException('Invalid invoice amount');  */
            // it is in built-in php library of exception, there are severeal exception in library
        }

        if(empty($this->customer->getBillingInfo())){
             throw new MissingBillingInfoException(); //custom made exception made in Exception folder
         }  
        echo 'Processing $' . $amount . 'invoice -';

        sleep(2);

        echo 'ok';
    }


 }

 $invoice = new Invoice(new Customer());
 try{
    $invoice->process(-34);
 } catch(\App\Exception\MissingBillingInfoException $e){
   /*  catch(\App\Exception\MissingBillingInfoException|\InvalidArgumentException $e ) multiple exception*/
   /*   echo $e->getMessage() . ' ' . $e->getFile();  *///after php 8 it is needed
   // after php 8 it can be like down there
   return "some string...";
 } catch(InvalidArgumentException){
    return 'some..'; //it can be muliple catch block
 }

 try {
    $invoice->process(-34);
 } catch(Exception $e){
    echo $e->getMessage('string...');
 } finally {
    echo 'finally block'; //this finally block, it will be throw no matter a exceptiom is throw or not
 }



/*  Exception is a object of Exception class that describes an error 
Both Exception and Error class implements a throwable interface*/



