<?php

namespace App\Services;

use App\Constract\Enums\UserStatusEnum;
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
                $statusButton =
                $user->status != UserStatusEnum::BANNED->value ?
                '<button class="btn text-danger toggle-status" title="banned '. $user->first_name .'" data-id="' . $user->id . '" data-status="banned"><i class="bi bi-slash-circle-fill"></i></button>' : '' ;
                $detailButton = '<button class="btn text-primary"  title="detail ' . $user->first_name . '" data-bs-toggle="modal" data-bs-target="#detailModal" data-id="' . $user->id . '"><i class="bi bi-info-circle-fill"></i></button>';

                return $statusButton . ' ' . $detailButton;
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
