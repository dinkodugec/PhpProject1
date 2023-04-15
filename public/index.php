<?php

use app\Enums\Status;
use app\Models\Flight;
use app\Models\PaymentGatway\Paddle\Transaction;


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
/* $transanction->amount = 125; */ // so if work in temas, someone can make mistake, and change property putside class, so good practice is to make this
                             // property private. Interaction outside class will be restricted. 

// so, if like to change the state of object, property, we should make another object like
// $transanction2 = new Transaction(258);

 $transanction->process();
/*Abstraction -internal implementation details of object id hidden from user and go hand by hand with a encapapsulation.
 We do not and should not know what is behind scenes of method process(), we except output
  Encapasulation hide internal state of information of object
  Abstraction hide implementation of it
 */