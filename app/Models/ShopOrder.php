<?php

namespace app\Models;

use app\Models\OrderInterface;


class ShopOrder implements OrderInterface
{
    public function __construct()
    {

    }

    public function getOrder()
    {
        return "This is order from Shop";
    }

    public function gerOrderById(int $id)
    {
        return $id;
    }
    public function createOrder(array $data)
    {
        return $data[""];
    }
    public function updateOrder(int $id, array $data)
    {
        return $id & $data[''];
    }
    public function deleteOrder(int $id)
    {
        return $id;
    }


}