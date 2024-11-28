<?php

namespace App\Constract\Enums;

enum UserStatusRegisterEnum: string
{
    case PENDING = 'pending';
    case APPCEPT = 'appcept';
    case REJECTED = 'rejected';

}
