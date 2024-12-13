<?php

namespace App\Constract\Interfaces;

use App\Http\Requests\RegisterFreelancerGoogleUpdtaeRequest;
use App\Http\Requests\RegisterFreelancerRequest;
use App\Models\User;

interface RegisterInterface
{
    public function freelancer(array $data): mixed;

    public function findByGoogleIdOrEmail(string $googleId, string $email): ?User;
    public function signUpFreelancerGoogle(RegisterFreelancerGoogleUpdtaeRequest $request, int $id): mixed;
}
