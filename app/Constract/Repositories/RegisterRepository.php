<?php

namespace App\Constract\Repositories;

use App\Constract\Interfaces\RegisterInterface;
use App\Http\Requests\RegisterFreelancerGoogleUpdtaeRequest;
use App\Http\Requests\RegisterFreelancerRequest;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class RegisterRepository extends BaseRepository implements RegisterInterface
{
    /**
     * Handle show method and update data instantly from models.
     *
     * @param user
     *
     * @return void
     */

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * Handle show method and delete data instantly from models.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function freelancer(RegisterFreelancerRequest $request): mixed
    {
        return $this->model->create($request->only([
            'first_name',
            'last_name',
            'email',
            'password',
            'country',
            'birthday'
        ]));
    }

    public function freelancerGoogleID(): mixed
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::where('google_id', $googleUser->getId())->first();

        if (!$user) {
            $user = User::create([
                'first_name' => explode(' ', $googleUser->getName())[0],
                'last_name' => explode(' ', $googleUser->getName(), 2)[1] ?? '',
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
            ]);
        }

        auth()->login($user);

        return redirect('journey');
    }


    public function signUpFreelancerGoogle(RegisterFreelancerGoogleUpdtaeRequest $request, $id): mixed
    {
        $freelancer = $this->model->findOrFail($id);

        $freelancer->update($request->only([
            'password',
            'country',
            'birthday'
        ]));

        return $freelancer;
    }


    /**
     * Handle get the specified data by id from models.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    /**
     * Handle the Get all data event from models.
     *
     * @return mixed
     */
    /**
     * Handle store data event to models.
     *
     * @param array $data
     *
     * @return mixed
     */

    /**
     * Handle show method and update data instantly from models.
     *
     * @param mixed $id
     * @param array $data
     *
     * @return mixed
     */

    /**
     * Handle show method and update data instantly from models.
     *
     * @param Request
     *
     * @return mixed
     */
}
