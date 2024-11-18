<?php

namespace App\Services;

use App\Models\Contract;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContractService

{
    public function getData(Request $request)
    {
        $contracts = Contract::with(['user', 'project']);

        // Apply status filter if provided
        if ($request->has('status') && !empty($request->status)) {
            $contracts->where('status', $request->status);
        }

        return DataTables::of($contracts)
            ->addColumn('user_name', function ($contract) {
                return $contract->user ? $contract->user->name : 'N/A';
            })
            ->addColumn('project_name', function ($contract) {
                return $contract->project ? $contract->project->name : 'N/A';
            })
            ->addColumn('date', function ($contract) {
                return $contract->start_date . ' - ' . $contract->end_date;
            })
            ->filter(function ($query) use ($request) {
                if ($request->has('search') && !empty($request->search['value'])) {
                    $search = $request->search['value'];
                    // Apply search to specific columns except 'status'
                    $query->where(function ($q) use ($search) {
                        $q->where('id', 'like', "%{$search}%")
                            ->orWhereHas('user', function ($q) use ($search) {
                                $q->where('name', 'like', "%{$search}%");
                            })
                            ->orWhereHas('project', function ($q) use ($search) {
                                $q->where('name', 'like', "%{$search}%");
                            })
                            ->orWhere('start_date', 'like', "%{$search}%")
                            ->orWhere('end_date', 'like', "%{$search}%");
                    });
                }
            })
            ->rawColumns(['date'])
            ->make(true);
    }
}
