<?php

namespace App\Contracts\Interfaces\Eloquent;
use App\Models\User;

interface GetInterface
{
    /**
     * Handle the Get all data event from models.
     *
     * @return mixed
     */

        public function get() :mixed;

        public function getAll() :mixed;

        public function findById($id): ?user;


}
