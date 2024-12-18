<?php

namespace App\Services;

use App\Constract\Enums\UserStatusEnum;
use App\Constract\Enums\UserStatusRegisterEnum;
use App\Constract\Interfaces\UserInterface;
use App\Http\Requests\UserAboutRequest;
use App\Http\Requests\UserExperienceRequest;
use App\Http\Requests\UserGoalRequest;
use App\Http\Requests\UserGoColumnquest;
use App\Http\Requests\UserJobRequest;
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
                $actionButtons = '';
                if ($user->status_acount_register === UserStatusRegisterEnum::ACCEPTED->value) {
                    $statusButton = $user->status != UserStatusEnum::BANNED->value
                        ? '<button class="btn text-danger toggle-status" title="Banned ' . $user->first_name . '" data-id="' . $user->id . '" data-status="banned">
                            <i class="bi bi-slash-circle-fill" style="font-size: 20px;"></i>
                            </button>'
                        : '';

                    $detailButton = '<button class="btn text-primary" title="Detail ' . $user->first_name . '"
                                    data-bs-toggle="modal" data-bs-target="#detailModal"
                                    data-id="' . $user->id . '">
                                    <i class="bi bi-info-circle-fill" style="font-size: 20px;"></i>
                                    </button>';

                    $actionButtons = $statusButton . ' ' . $detailButton;
                } elseif ($user->status_acount_register === UserStatusRegisterEnum::PENDING->value) {
                    $rejectButton = '<button class="btn text-danger reject-account" title="Reject ' . $user->first_name . '"
                    data-id="' . $user->id . '" data-status="rejected">
                    <i class="bi bi-x-circle-fill" style="font-size: 20px;"></i>
                </button>';
                    $acceptButton = '<button class="btn text-success accept-account" title="Accept ' . $user->first_name . '"
                    data-id="' . $user->id . '" data-status="accepted">
                    <i class="bi bi-check-circle-fill" style="font-size: 20px;"></i>
                </button>';


                    $actionButtons =  $rejectButton . '' . $acceptButton;
                } elseif ($user->status_acount_register === UserStatusRegisterEnum::REJECTED->value) {
                    $actionButtons = '<span class="text-danger">Account Rejected</span>';
                }

                return $actionButtons;
            })
            ->addColumn('role', fn($user) => $user->getUserRoleInstance()->value)
            ->addColumn('status', function ($user) {
                if ($user->status == UserStatusEnum::BANNED->value) {
                    return 'banned';
                } elseif ($user->status == UserStatusEnum::ACTIVE->value) {
                    return 'active';
                } elseif ($user->status == UserStatusEnum::NULL->value) {
                    return '--';
                }
            })

            ->filterColumn('name', function ($query, $keyword) {
                $query->where('name', 'LIKE', "%{$keyword}%");
            })
            ->filterColumn('email', function ($query, $keyword) {
                $query->where('email', 'LIKE', "%{$keyword}%");
            })
            ->rawColumns(['status', 'action'])
            ->make(true);
    }

    public function updateStatusAcount(Request $request)
    {
        $user = $this->userInterface->show($request->id);

        if ($request->status === UserStatusRegisterEnum::ACCEPTED->value) {
            $user->status_acount_register = UserStatusRegisterEnum::ACCEPTED->value;
            $user->status = UserStatusEnum::ACTIVE->value;
        } elseif ($request->status === UserStatusRegisterEnum::REJECTED->value) {
            $user->status_acount_register = UserStatusRegisterEnum::REJECTED->value;
            $user->status = UserStatusEnum::NULL->value;
        } else {
            $user->status_acount_register = UserStatusRegisterEnum::PENDING->value;
            $user->status = UserStatusEnum::NULL->value;
        }

        $user->update();
    }

    public function UpdateGoal(UserGoalRequest $request)
    {
        $validatedRequest = $request->validated();
        $validatedRequest["user_id"] = auth()->user()->id;

        return $this->userInterface->UpdateColumn($validatedRequest);
    }

    public function UpdateJob(UserJobRequest $request)
    {
        $validatedRequest = $request->validated();
        $validatedRequest["user_id"] = auth()->user()->id;

        return $this->userInterface->UpdateColumn($validatedRequest);
    }

    public function UpdateExperience(UserExperienceRequest $request)
    {
        $validatedRequest = $request->validated();
        $validatedRequest["user_id"] = auth()->user()->id;

        return $this->userInterface->UpdateColumn($validatedRequest);
    }

    public function UpdateAboutUser(UserAboutRequest $request)
    {
        $validatedRequest = $request->validated();
        $validatedRequest["user_id"] = auth()->id();

        if ($request->hasFile('about_user')) {

            $file = $request->file('about_user');

            $filePath = $file->store('uploads/about_users', 'public');

            $validatedRequest['about_user'] = $filePath;
        }

        return $this->userInterface->UpdateAboutUser($validatedRequest);
    }
}
