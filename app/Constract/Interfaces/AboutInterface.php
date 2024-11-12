<?php

namespace App\Constract\Interfaces;

use App\Constract\Interfaces\Eloquent\DeleteInterface;
use App\Constract\Interfaces\Eloquent\GetInterface;
use App\Constract\Interfaces\Eloquent\ShowInterface;
use App\Constract\Interfaces\Eloquent\StoreInterface;
use App\Constract\Interfaces\Eloquent\UpdateInterface;

interface AboutInterface extends GetInterface, StoreInterface,  ShowInterface, UpdateInterface, DeleteInterface
{
}
