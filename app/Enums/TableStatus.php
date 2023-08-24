<?php

namespace App\Enums;

enum TableStatus: string
{
    case Pending = 'pending';
    case Avaliablle = 'avaliable';
    case Unavaliable = 'unavaliable';

}