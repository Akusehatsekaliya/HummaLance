<?php

namespace App\Enums;

enum RoleUserEnum: string
{
    case CLIENT = 'cleant';
    case FREELANCER = 'freelancer';
    case ADMIN = 'admin';
}
