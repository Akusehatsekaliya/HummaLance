<?php

namespace App\Constract\Interfaces\Eloquent;

interface GetInterface
{
    /**
     * Handle the Get all data event from models.
     *
     * @return mixed
     */

    public function get(): mixed;
}
