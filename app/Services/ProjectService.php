<?php

namespace App\Services;

use App\Models\Project;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProjectService
{


    public function getData(Request $request)
    {
        $categories = Project::with(['user', 'category'])->select(['id', 'name', 'description', 'user_id', 'category_id', 'budget']);

        return DataTables::of($categories)
            ->addIndexColumn()
            ->addColumn('user_name', function ($row) {
                return $row->user ? $row->user->name : '-';
            })
            ->addColumn('category_name', function ($row) {
                return $row->category ? $row->category->name : '-';
            })
            ->make(true);
    }
}
