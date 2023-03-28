<?php

namespace app\Models;

use app\Enums\Status;

 class Flight
{

    private string $status;

/*     public const STATUS_APROVED = 'aproved';
    public const STATUS_PENDING= 'pending';
    public const STATUS_DECLINED= 'declined'; */


    public function __construct()
    {
       $this->setStatus(Status::APROVED);
    }

    public function setStatus(string $status): self
    {
     if(! isset(Status::ALL_STATUSES[$status])){
        throw new \InvalidArgumentException('Invalid status');
     }
  
     $this->status = $status;

     return $this;

    }



    
} 