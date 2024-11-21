<?php

namespace App\Constract\Interfaces;

use App\Constract\Interfaces\Eloquent\GetInterface;

interface DashboardInterface
{
    public function getUser(): mixed;
    public function getProject(): mixed;
    public function getContract(): mixed;
}
