<?php

namespace App\Constract\Enums;

enum UserStatusReportEnum: string
{
    case PENDING = 'Pending';
    case IN_PROGRESS = 'in progress';
    case RESOLVED = 'Resolved';

}
