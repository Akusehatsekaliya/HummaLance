<?php

namespace App\Services;

use App\Constract\Interfaces\RegisterInterface;
use Laravel\Socialite\Facades\Socialite;

class RegisterService
{

    private RegisterInterface $registerInterface;

    public function __construct(RegisterInterface $registerInterface)
    {
        $this->registerInterface = $registerInterface;
    }

    public function FreelancerRegister(array $data)
    {
        $data['password'] = bcrypt($data['password']);
        $data['birthday'] = $data['year'] . '-' . $data['month'] . '-' . $data['day'];

        $this->registerInterface->freelancer($data);
    }

    public function FreelancerRegisterGoogle(array $data)
    {

        $googleUser = Socialite::driver('google')->user();

        $user = $this->registerInterface->findByGoogleIdOrEmail($googleUser->getId(), $googleUser->getEmail());

        if (!$user) {
            $userData = [
                'first_name' => explode(' ', $googleUser->getName())[0],
                'last_name' => explode(' ', $googleUser->getName(), 2)[1] ?? '',
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
            ];

            $user = $this->registerInterface->freelancer($userData);
        }

        auth()->login($user);

        return $user;
    }
}
