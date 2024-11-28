<?php

namespace App\Constract\Repositories;

use App\Constract\Interfaces\UserInterface;
use App\Models\User;
use Illuminate\Http\Request;

class UserRepository extends BaseRepository implements UserInterface
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
    public function delete(mixed $id): mixed
    {
        return $this->model->query()->findOrFail($id)->delete();
    }

    /**
     * Handle get the specified data by id from models.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show(mixed $id): mixed
    {
        return $this->model->query()
            ->findOrFail($id);
    }

    /**
     * Handle the Get all data event from models.
     *
     * @return mixed
     */
    public function get(Request $request): mixed
    {
        return $this->model->with('roles')
            ->select(['id', 'first_name', 'last_name', 'email', 'status', 'status_acount_register'])
            ->when($request->role, function ($query, $role) {
                return $query->whereHas('roles', fn($q) => $q->where('name', $role));
            }, function ($query) {
                return $query->whereDoesntHave('roles', fn($q) => $q->where('name', 'admin'));
            });
    }
    /**
     * Handle store data event to models.
     *
     * @param array $data
     *
     * @return mixed
     */
    public function store(array $data): mixed
    {
        return $this->model->query()
            ->create($data);
    }
    /**
     * Handle show method and update data instantly from models.
     *
     * @param mixed $id
     * @param array $data
     *
     * @return mixed
     */
    public function update(mixed $id, array $data): mixed
    {
        return $this->model->query()->findOrFail($id)->update($data);
    }

    /**
     * Handle show method and update data instantly from models.
     *
     * @param Request
     *
     * @return mixed
     */
    public function search(Request $request): mixed
    {
        return $this->model->query()->get();
    }

    public function showDetail(mixed $id): mixed
    {
        return  $this->model->find($id);
    }
}
