<?php

namespace App;

use app\CappuccinoTrait;

class CappuccinoMaker
{

    use CappuccinoTrait{
        CappuccinoTrait::makeCappuccino as public; //so it is solved in this way to access private method as a public
    }  

}