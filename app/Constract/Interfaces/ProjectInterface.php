<?php

namespace App\Constract\Interfaces;

use App\Constract\Interfaces\Eloquent\GetInterface;

interface ProjectInterface extends GetInterface
{
    public function total(): int;
}
