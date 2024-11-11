<?php

namespace App\Http\Controllers\Admin;

use App\Constract\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.user');
    }

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
                return '<button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>';
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
