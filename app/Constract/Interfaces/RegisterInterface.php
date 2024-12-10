<?php

namespace App\Constract\Interfaces;

use App\Http\Requests\RegisterFreelancerGoogleUpdtaeRequest;
use App\Http\Requests\RegisterFreelancerRequest;

interface RegisterInterface
{
    public function freelancer(RegisterFreelancerRequest $request): mixed;
    public function freelancerGoogleID(): mixed;
    public function signUpFreelancerGoogle(RegisterFreelancerGoogleUpdtaeRequest $request, int $id): mixed;
}
