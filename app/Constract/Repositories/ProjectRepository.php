<?php

namespace App\Constract\Repositories;

use App\Constract\Interfaces\ProjectInterface;
use App\Models\Project;

class ProjectRepository extends BaseRepository implements ProjectInterface
{

    private Project $project;

    public function __construct(Project $project)
    {
        $this->model = $project;
    }

    public function get(): mixed
    {
        return $this->model->with(['user', 'category'])
            ->select(['id', 'name', 'description', 'user_id', 'category_id', 'budget'])
            ->get();
    }
}
