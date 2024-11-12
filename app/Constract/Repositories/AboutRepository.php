<?php

namespace App\Constract\Repositories;

use App\Constract\Interfaces\AboutInterface;
use App\Models\About;
use Illuminate\Database\Eloquent\Model;

class AboutRepository extends BaseRepository implements AboutInterface
{
    public function __construct(About $about)
    {
        $this->model = $about;
    }

    public function get(): mixed
    {
        return $this->model->query()->get();
    }

    public function update(mixed $id, array $data): mixed
    {
        return $this->model->query()->findOrFail($id)->update($data);
    }
}

