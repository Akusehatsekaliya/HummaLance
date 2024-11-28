<?php

namespace App\Services;

use App\Constract\Enums\UserStatusEnum;
use App\Constract\Enums\UserStatusRegisterEnum;
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
                $actionButtons = '';
                if ($user->status_acount_register === UserStatusRegisterEnum::APPCEPT->value) {
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
                    $rejectButton = '<button class="btn text-danger reject-account" title="rejecd ' . $user->first_name . '"
                        data-id="' . $user->id . '" data-status="rejected">
                        <i class="bi bi-x-circle-fill" style="font-size: 20px;"></i>
                        </button>';
                    $acceptButton = '<button class="btn text-success accept-account" title="appcept ' . $user->first_name . '"
                        data-id="' . $user->id . '" data-status="appcept">
                        <i class="bi bi-check-circle-fill" style="font-size: 20px;"></i>
                        </button>';

                    $actionButtons =  $rejectButton.''.$acceptButton;
                } elseif ($user->status_acount_register === UserStatusRegisterEnum::REJECTED->value) {
                    $actionButtons = '<span class="text-danger">Account Rejected</span>';
                }

                return $actionButtons;
            })
            ->addColumn('role', fn($user) => $user->getUserRoleInstance()->value)
            ->addColumn('status', function ($user) {
                return $user->status == UserStatusEnum::BANNED->value ? 'banned' : 'active';
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
}
