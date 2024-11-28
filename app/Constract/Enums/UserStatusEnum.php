<?php

namespace App\Constract\Enums;

enum UserStatusEnum: string
{
    case ACTIVE = 'active';
    case BANNED = 'banned';
    case NULL   = '--';

    public static function getValues()
    {
        return [self::ACTIVE, self::BANNED, self::NULL];
    }
}
