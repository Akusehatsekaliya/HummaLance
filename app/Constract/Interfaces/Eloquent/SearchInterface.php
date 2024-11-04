<?php

namespace App\Contracts\Interfaces\Eloquent;

use Illuminate\Http\Request;

interface SearchInterface
{
    /**
     * show
     *
     * @param  mixed $id
     * @return mixed
     */
    public function search(Request $request): mixed;
}