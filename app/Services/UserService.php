<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserService

{
    public function getData(Request $request)
    {
        $users = User::with('roles')
            ->select(['id', 'name', 'email'])
            ->when($request->role, function ($query, $role) {
                return $query->whereHas('roles', fn($q) => $q->where('name', $role));
            }, function ($query) {
                return $query->whereDoesntHave('roles', fn($q) => $q->where('name', 'admin'));
            });

        return DataTables::of($users)
            ->addIndexColumn()
            ->addColumn('action', function ($user) {
                return '<button class="btn text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="'. $user->id .'"><i class="bi bi-trash3-fill"></i></button>';
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
