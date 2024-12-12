<?php

namespace App\Constract\Enums;

enum UserJobEnum: string
{
    case OFFICE = 'work in office';
    case WFH = 'work at home / work remote';
    case FULL_TIME = 'full time';
    case PART_TIME = 'part time';
}
