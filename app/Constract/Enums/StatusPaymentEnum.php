<?php

namespace App\Constract\Enums;

enum StatusPaymentEnum: string
{
    case PENDING = 'pending';
    case COMPLETE = 'completed';
}
