<?php


use app\Models\Flight;


spl_autoload_register(function($class){

   $path =__DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
   require $path;
});


$flight = new Flight();
echo $flight->hello();
