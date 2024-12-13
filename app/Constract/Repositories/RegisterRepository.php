<?php

namespace App\Constract\Repositories;

use App\Constract\Interfaces\RegisterInterface;
use App\Http\Requests\RegisterFreelancerGoogleUpdtaeRequest;
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
    public function freelancer(array $data): mixed
    {
        return $this->model->create($data);
    }

    public function findByGoogleIdOrEmail(string $googleId, string $email): ?User
    {
        return $this->model->where('google_id', $googleId)
            ->orWhere('email', $email)
            ->first();
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
