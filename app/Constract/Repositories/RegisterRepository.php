<?php

namespace App\Constract\Repositories;

use App\Constract\Interfaces\RegisterInterface;
use App\Models\User;

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
        public function freelancer(): mixed
        {
            return $this->model->query->get();
        }
    /**
     * Handle get the specified data by id from models.
     *
     * @param mixed $id
     *
     * @return mixed
     */
        public function company(): mixed
        {
            return $this->model->query->get();
        }
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
