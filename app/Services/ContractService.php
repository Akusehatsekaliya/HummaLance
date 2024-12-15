<?php

namespace App\Services;

use App\Constract\Interfaces\ContractInterface;
use App\Models\Contract;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContractService
{

    private ContractInterface $contractInterface;

    public function __construct(ContractInterface $contractInterface)
    {
        $this->contractInterface = $contractInterface;
    }
    public function getData(Request $request)
    {
        $contracts = $this->contractInterface->get();

        if ($request->has('status') && !empty($request->status)) {
            $contracts->where('status', $request->status);
        }

        return DataTables::of($contracts)
            ->addIndexColumn()
            ->addColumn('user_name', function ($contract) {
                return $contract->user ? $contract->user->name : 'N/A';
            })
            ->addColumn('project_name', function ($contract) {
                return $contract->project ? $contract->project->name : 'N/A';
            })
            ->addColumn('date', function ($contract) {
                return $contract->start_date . ' - ' . $contract->end_date;
            })
            ->addColumn('Action', function ($contract) {
                return '<button class="btn text-primary" title="detail contract" data-bs-toggle="modal" data-bs-target="#detailModal" data-id="' . $contract->id . '"><i class="bi bi-info-circle-fill"></i></button>';
            })
            ->filter(function ($query) use ($request) {
                if ($request->has('search') && !empty($request->search['value'])) {
                    $search = $request->search['value'];
                    $query->where(function ($q) use ($search) {
                        $q->where('id', 'like', "%{$search}%")
                            ->orWhereHas('contract', function ($q) use ($search) {
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
            ->rawColumns(['Action'])
            ->make(true);
    }
}
