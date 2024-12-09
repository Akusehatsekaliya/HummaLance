<?php

namespace App\Services;

use App\Constract\Interfaces\RegisterInterface;
use App\Constract\Repositories\RegisterRepository;
use App\Http\Requests\RegisterFreelancerRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RegisterService
{
    protected $registerRepository;
    private RegisterInterface $registerInterface;

    public function __construct(RegisterRepository $registerRepository, RegisterInterface $registerInterface)
    {
        $this->registerRepository = $registerRepository;
        $this->registerInterface = $registerInterface;
    }

    public function freelancerStore(RegisterFreelancerRequest $request)
    {
        $validatedData = $request->validated();

        return $this->registerInterface->freelancer($validatedData);
    }
}
