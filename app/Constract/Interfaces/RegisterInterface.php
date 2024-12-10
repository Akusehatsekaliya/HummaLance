<?php

namespace App\Constract\Interfaces;

use App\Http\Requests\RegisterFreelancerRequest;

interface RegisterInterface
{
    public function freelancer(RegisterFreelancerRequest $request): mixed;
    public function company(): mixed;
}
