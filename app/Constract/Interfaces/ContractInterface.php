<?php

namespace App\Constract\Interfaces;

use App\Constract\Interfaces\Eloquent\GetInterface;

interface ContractInterface extends GetInterface
{
    public function showDetail(mixed $id): mixed;
}
