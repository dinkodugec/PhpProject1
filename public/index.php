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



$datetime = new DateTime();

/* var_dump($datetime); //object(DateTime)#3 (3) { ["date"]=> string(26) "2023-05-24 22:40:07.496164" ["timezone_type"]=> int(3) ["timezone"]=> string(13) "Europe/Berlin" }

$datetime->setTimezone(new DateTimeZone('Europe/Amsterdam')); //in PHP manual ime zones
var_dump($datetime);
 */
/* 
 echo $datetime->getTimezone()->getName() . ' - ' . $datetime->format('m//Y g:i:A');  */

 //CreteFormFormat method is good for different time formant - US, Europe

/* $date = '15/05/2023 3:30PM';
$datetime = DateTime::createFromFormat('d/m/Y g:iA', $date); FORMATING DATE and time - some data came from pi, or inputs or similiar  */

$datetime1 = new DateTime('05/05/2023 9:15 AM');
$datetime2 = new DateTime('05/06/2023 3:15 AM');

/* var_dump($datetime1);
die(); */

/* 
var_dump($datetime1 < $datetime2);
var_dump($datetime1 > $datetime2);
var_dump($datetime1 == $datetime2);
 */

/* DIFFERENCES BETWEEN DAYS */

/* var_dump($datetime1->diff($datetime2)); */
//diff() 
//it also creates invert in properties of object, it means negtive difference

/* echo $datetime2->diff($datetime1)->days;
echo $datetime2->diff($datetime1)->format('%d days, %Y years');
echo $datetime2->diff($datetime1)->format('%a');  //days total difference

$interval = new DateInterval(''); //see in documentation */

/* Calculation  */

$datetime = new DateTime('05/05/2023 9:15 AM');
$interval = new DateInterval('P1M');


$datetime->add($interval);
echo $datetime->format('m/d/Y g:iA');

$datetime->sub($interval);
echo $datetime->format('m/d/Y g:iA');

$from = new DateTime();
$to = ($from)->add(new DateInterval('P1M'));
echo $from->format('m/d/Y') . ' ' . $to->format('m/d/Y');


$from = new DateTimeImmutable();
$to = $from->add(new DateInterval('P1M'));
echo $from->format('m/d/Y') . ' ' . $to->format('m/d/Y');

$period = new DatePeriod(new DateTime('05/01/2022'),new DateInterval('P1D'), new DateTime('05/31/2022'));
foreach($period as $date){
    echo $date->format('m/d/Y');
}