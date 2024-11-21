<?php

namespace App\Constract\Enums;

enum UserStatusEnum: string
{
    case ACTIVE = 'active';
    case NONACTIVE = 'non_active';

    public static function getValues()
    {
        return [self::ACTIVE, self::NONACTIVE];
    }
}
