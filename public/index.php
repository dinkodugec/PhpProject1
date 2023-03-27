<?php


use app\Models\Flight;


/* spl_autoload_register(function($class){

   $path =__DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
        if(file_exists($path)){  //psr-4 - can not raise error or waning
            require $path;
        } 
}); */

require_once __DIR__ . '/../vendor/autoload.php';

/* Composer  */

require_once '../vendor/autoload.php';

$id = new \Ramsey\Uuid\UuidFactory();
echo $id->uuid4();
 
$flight = new Flight;
echo $flight->hello();
