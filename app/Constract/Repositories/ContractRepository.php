<?php

namespace App\Constract\Repositories;

use App\Constract\Interfaces\ContractInterface;
use App\Models\Contract;

class ContractRepository extends BaseRepository implements ContractInterface
{

    private Contract $contract;

    public function __construct(Contract $contract)
    {
        $this->model = $contract;
    }

    public function get(): mixed
    {
        return $this->model->with(['user', 'project']);
    }

    public function showDetail(mixed $id): mixed
    {
        return  $this->model->query()->with(['user', 'project'])->find($id);
    }
}
