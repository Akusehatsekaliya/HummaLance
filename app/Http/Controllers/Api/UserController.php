<?php

namespace App\Http\Controllers\Api;

use App\Constract\Enums\UserStatusEnum;
use App\Constract\Interfaces\CategoryInterface;
use App\Constract\Interfaces\UserInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UserAboutRequest;
use App\Http\Requests\UserGoalRequest;
use App\Http\Requests\UserJobRequest;
use App\Http\Resources\UserResource;
use App\Models\Category;
use App\Models\User;
use App\Services\CategoryService;
use App\Services\UserService;
use Illuminate\Http\Request;
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
    }

    public function toggleStatus(User $user)
    {
        $this->userInterface->update($user->id, [
            'status' => $user->status == UserStatusEnum::ACTIVE->value ? UserStatusEnum::BANNED->value : UserStatusEnum::ACTIVE->value,
        ]);

        return response()->json([
            'message' => 'Account Banned',
        ]);
    }

    public function showDetail($id)
    {
        $users = $this->userInterface->showDetail($id);

        if ($users) {
            return new UserResource($users);
        }

        return response()->json(['error' => 'not found'], 404);
    }

    public function updateStatusRegister(Request $request)
    {
        $this->service->updateStatusAcount($request);

        return response()->json(['message' => 'Status updated successfully!']);
    }

    public function UpdateGoal(UserGoalRequest $request)
    {
        $this->service->UpdateGoal($request);

        return redirect();
    }

    public function UpdateJob(UserJobRequest $request)
    {
        $this->service->UpdateJob($request);

        return redirect();
    }

    public function UpdateAboutUser(UserAboutRequest $request)
    {
        $this->service->UpdateAboutUser($request);

        return redirect();
    }
}
