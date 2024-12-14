<?php

namespace App\Services;

use App\Constract\Interfaces\ProjectInterface;
use App\Models\Project;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProjectService
{

    private ProjectInterface $projectInterface;

    public function __construct(ProjectInterface $projectInterface)
    {
        $this->projectInterface = $projectInterface;
    }

    public function getData(Request $request)
    {
        $categories = $this->projectInterface->get();

        return DataTables::of($categories)
            ->addIndexColumn()
            ->addColumn('user_name', function ($row) {
                return $row->user ? "{$row->user->first_name} {$row->user->last_name}" : '-';
            })
            ->addColumn('category_name', function ($row) {
                return $row->category ? $row->category->name : '-';
            })
            ->make(true);
    }
}
