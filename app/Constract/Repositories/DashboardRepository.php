<?php

namespace App\Constract\Repositories;

use App\Constract\Interfaces\DashboardInterface;
use App\Models\Contract;
use App\Models\Project;
use App\Models\User;

class DashboardRepository extends BaseRepository implements DashboardInterface
{

    private User $user;
    private Project $project;
    private Contract $contract;

    public function __construct(User $user, Project $project, Contract $contract)
    {
        $this->user = $user;
        $this->project = $project;
        $this->contract = $contract;
    }

    public function getUser(): mixed
    {
        return $this->user->query()->count();
    }

    public function getProject(): mixed
    {
        return $this->project->query()->count();
    }

    public function getContract(): mixed
    {
        return $this->contract->query()->count();
    }
}
