<?php

namespace App\Http\Controllers\Admin;

use App\Constract\Enums\UserRoleEnum;
use App\Constract\Enums\UserStatusEnum;
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

    public function toggleStatus(User $user)
    {
        $this->userInterface->update($user->id, [
            'status' => $user->status == UserStatusEnum::ACTIVE->value ? UserStatusEnum::BANNED->value : UserStatusEnum::ACTIVE->value,
        ]);

        return response()->json([
            'message' => 'User status changed successfully.',
        ]);
    }

    public function showDetail($id)
    {
        $users = $this->userInterface->showDetail($id);

        if ($users) {
            return response()->json([
                'id' => $users->id,
                'project_name' => $users->project->name,
                'user_name' => $users->user->name,
                'project_date' => $users->start_date . ' - ' . $users->end_date,
                'contract_file' => $users->file,
                'project_description' => $users->description,
                'amount_project' => $users->project->budget,
                'payment_status' => $users->payment_status,
                'approval_status' => $users->approval_status,
                'status' => $users->status
            ]);
        }

        return response()->json(['error' => 'Contract not found'], 404);
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
