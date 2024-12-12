<?php

namespace App\Constract\Enums;

enum UserGoalEnum: string
{
    case SIDE = 'side';
    case STEADY = 'steady';
    case EXPERIENCE = 'experience';
    case NOTHING = 'nothing';
}
