<?php

namespace App\Constract\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository {
    /**
     * Handle model initialization.
     *
     * @var Model $model
     */

    protected Model $model;
}
