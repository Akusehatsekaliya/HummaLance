<?php

namespace App\Services;

use App\Constract\Interfaces\CategoryInterface;
use App\Constract\Repositories\CategoryRepository;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CategoryService
{
    protected $categoryRepository;
    private CategoryInterface $categoryInterface;

    public function __construct(CategoryRepository $categoryRepository, CategoryInterface $categoryInterface)
    {
        $this->categoryRepository = $categoryRepository;
        $this->categoryInterface = $categoryInterface;
    }


    public function getData(Request $request)
    {
        $categories = $this->categoryInterface->get();

        return DataTables::of($categories)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '
                <button type="button" class="bg-transparent border-none btn text-warning edit-btn" data-id="' . $row->id . '" data-name="' . $row->name . '" id="editBtn' . $row->id . '">
                    <i class="bi bi-pen-fill"></i>
                </button>
                <button type="button" class="btn text-danger delete-btn" data-id="' . $row->id . '" id="deleteBtn' . $row->id . '">
                    <i class="bi bi-trash3-fill"></i>
                </button>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
