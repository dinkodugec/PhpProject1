<?php

namespace app\Enums;



 class Status
{

    public const APROVED = 'aproved';
    public const PENDING= 'pending';
    public const DECLINED= 'declined';


    public const ALL_STATUSES = [
        self::PENDING => 'Pending',
        self::APROVED => 'Aproved',
        self::DECLINED => 'Declined',
    ];


    
} 