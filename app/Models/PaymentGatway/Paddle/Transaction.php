<?php

namespace app\Models\PaymentGatway\Paddle;


class Transaction
{

    private float $amount; //private property that save the state of a object so no one can change her

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function process()
    {
        echo 'Processing $' . $this->amount . 'transaction';
    }

/*     public function getAmount(): float
    {
        return $this->amount;
    } */


    

    
}