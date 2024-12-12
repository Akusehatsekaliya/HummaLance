<?php

namespace App\Services;

use App\Constract\Interfaces\CompanyInterface;
use App\Http\Requests\CompanyRequest;

class CompanyService
{
    private CompanyInterface $companyInterface;

    public function __construct(CompanyInterface $companyInterface)
    {
        $this->companyInterface = $companyInterface;
    }
    public function store(CompanyRequest $request)
    {
        $validatedRequest = $request->validated();
        $validatedRequest["user_id"] = auth()->id();
        return  $this->companyInterface->store($validatedRequest);

    }
}
