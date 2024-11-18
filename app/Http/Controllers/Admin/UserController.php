<?php

namespace App\Http\Controllers\Admin;

use App\Constract\Enums\UserRoleEnum;
use App\Constract\Interfaces\UserInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\UserService;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    private UserService $service;
    private UserInterface $userInterface;

    public function __construct(UserService $service, UserInterface $userInterface)
    {
        $this->service = $service;
        $this->userInterface = $userInterface;
    }
    /**z
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            return $this->service->getData($request);
        }
        return view('admin.user');
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
        try {
            $this->userInterface->delete($id);
            return redirect()->route('admin.user.index')->with('success', 'User deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.user.index')->with('error', 'Failed to delete users.');
        }
    }
}
