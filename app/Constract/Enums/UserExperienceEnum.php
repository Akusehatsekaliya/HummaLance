<?php

namespace App\Constract\Enums;

enum UserExperienceEnum: string
{
    case NEW = 'new freelancer';
    case EXPERIENCE = 'experience';
    case EXPERT = 'expert';
}
