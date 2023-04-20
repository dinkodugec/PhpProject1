<?php

namespace app\Models;

use app\Models\OrderInterface;

class Order
{

public $order;

public function __construct(OrderInterface $order)  //accept OrderInterface instance and ave in public variable $order
{
    $this->order = $order; //save OrderInterface object in public
}



}