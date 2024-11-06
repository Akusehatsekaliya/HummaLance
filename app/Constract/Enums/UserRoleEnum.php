<?php

namespace App\Constract\Enums;

enum UserRoleEnum: string
{
    case CLIENT = 'client';
    case FREELANCER = 'freelancer';
    case ADMIN = 'admin';
}