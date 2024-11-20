<?php

namespace App\Services;

use App\Constract\Interfaces\UserInterface;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserService
{
    private UserInterface $userInterface;

    public function __construct(UserInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }
    public function getData(Request $request)
    {
        $users = $this->userInterface->get($request);

        return DataTables::of($users)
            ->addIndexColumn()
            ->addColumn('action', function ($user) {
                return '<button class="btn text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="' . $user->id . '"><i class="bi bi-trash3-fill"></i></button>';
            })
            ->addColumn('role', fn($user) => $user->getUserRoleInstance()->value)
            ->filterColumn('name', function ($query, $keyword) {
                $query->where('name', 'LIKE', "%{$keyword}%");
            })
            ->filterColumn('email', function ($query, $keyword) {
                $query->where('email', 'LIKE', "%{$keyword}%");
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
