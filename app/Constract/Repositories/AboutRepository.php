<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\AboutInterface;
use App\Models\About;
use App\Models\barang;
use Illuminate\Database\Eloquent\Model;

class AboutRepository extends BaseRepository implements AboutInterface
{
    public function __construct(About $about)
    {
        $this->model = $about;
    }

    public function get(): mixed
    {
        return $this->model->all();
    }

    public function update(mixed $id, array $data): mixed
    {
        return $this->model->query()->findOrFail($id)->update($data);
    }


}

