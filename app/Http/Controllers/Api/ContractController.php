<?php

namespace App\Http\Controllers\Api;

use App\Constract\Interfaces\ContractInterface;
use App\Http\Controllers\Controller;
use App\Services\ContractService;
use Illuminate\Http\Request;


class ContractController extends Controller
{
    private ContractService $contractService;
    private ContractInterface $contractInterface;

    public function __construct(ContractService $contractService, ContractInterface $contractInterface)
    {
        $this->contractService = $contractService;
        $this->contractInterface = $contractInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            return $this->contractService->getData($request);
        }
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
        // dd("test");
    }

    public function showDetail($id)
    {
        $contract = $this->contractInterface->showDetail($id);

        if ($contract) {
            return response()->json([
                'id' => $contract->id,
                'project_name' => $contract->project->name,
                'user_name' => $contract->user->first_name . ' ' . $contract->user->last_name,
                'project_date' => $contract->start_date . ' - ' . $contract->end_date,
                'contract_file' => $contract->file,
                'project_description' => $contract->description,
                'amount_project' => $contract->project->budget,
                'payment_status' => $contract->payment_status,
                'approval_status' => $contract->approval_status,
                'status' => $contract->status
            ]);
        }

        return response()->json(['error' => 'Contract not found'], 404);
    }

    /**
     * Display the specified resource.
     */

    public function downloadContract($id)
    {
        $contract = $this->contractInterface->showDetail($id);
        return response()->download(public_path($contract->file));
    }
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
