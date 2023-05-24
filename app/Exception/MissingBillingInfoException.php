<?php

namespace App\Exception;

use Exception;

class MissingBillingInfoException extends \Exception
{
    protected $message = 'Missing billing iformation';


    public static function missingInfo() //so this static method canbe called 
    {
        return new static ('missing billing information');
    }


}