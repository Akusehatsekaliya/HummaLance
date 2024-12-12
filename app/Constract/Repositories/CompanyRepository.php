<?php

namespace App\Constract\Repositories;

use App\Constract\Interfaces\CompanyInterface;
use App\Models\Company;

class CompanyRepository extends BaseRepository implements CompanyInterface
{

    private Company $company;

    public function __construct(Company $company)
    {
        $this->model = $company;
    }

    public function store(array $data): mixed
    {
        return $this->model->create($data);
    }
}
