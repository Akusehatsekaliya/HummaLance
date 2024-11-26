<?php

namespace App\Constract\Enums;

enum ApprovalStatusEnum: string
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
}
