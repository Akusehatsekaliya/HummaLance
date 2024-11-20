<?php

namespace App\Constract\Interfaces;

use App\Constract\Interfaces\Eloquent\DeleteInterface;
use App\Constract\Interfaces\Eloquent\GetInterface;
use App\Constract\Interfaces\Eloquent\SearchInterface;
use App\Constract\Interfaces\Eloquent\ShowInterface;
use App\Constract\Interfaces\Eloquent\StoreInterface;
use App\Constract\Interfaces\Eloquent\UpdateInterface;
use Illuminate\Http\Request;

interface UserInterface extends StoreInterface, UpdateInterface, DeleteInterface, SearchInterface, ShowInterface
{
    public function get(Request $request): mixed;
}
