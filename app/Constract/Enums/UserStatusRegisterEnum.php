<?php

namespace App\Constract\Enums;

enum UserStatusRegisterEnum: string
{
    case PENDING = 'pending';
    case ACCEPTED = 'accepted';
    case REJECTED = 'rejected';

}
