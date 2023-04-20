<?php

namespace app\Models;

interface OrderInterface
{
    public function __construct();
    public function getOrder();
    public function gerOrderById(int $id);
    public function createOrder(array $data);
    public function updateOrder(int $id, array $data);
    public function deleteOrder(int $id);

}




