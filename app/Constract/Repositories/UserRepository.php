<?php

namespace App\Constract\Repositories;

use App\Constract\Interfaces\UserInterface;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
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
     * Handle the Get total of all data from models.
     *
     * @return int
     */
    public function total(): int
    {
        return $this->model->count();
    }

    /**
     * Handle the Get all data event from models.
     *
     * @return mixed
     */
    public function get(Request $request): mixed
    {
        return $this->model->with('roles')
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

    public function UpdateGoal(array $data): mixed
    {
        return $this->model->update($data);
    }
    public function UpdateJob(array $data): mixed
    {
        return model::where('user_id', $data['user_id'])
            ->update(['job' => $data['job']]);
    }

    public function UpdateAboutUser(array $data): mixed
    {
        return model::where('user_id', $data['user_id'])
            ->update(['about_user' => $data['about_user']]);
    }
}
