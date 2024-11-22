<?php

namespace App\Constract\Enums;

enum UserStatusEnum: string
{
    case ACTIVE = 'active';
    case BANNED = 'banned';

    public static function getValues()
    {
        return [self::ACTIVE, self::BANNED];
    }
}
