<?php

use App\Constract\Repositories\CategoryRepository;
use Yajra\DataTables\DataTables;

class CategoryService
{
  protected $categoryRepository;

  public function __construct(CategoryRepository $categoryRepository)
  {
    $this->categoryRepository = $categoryRepository;
  }

  public function getCategoriesForDataTable()
  {
    $categories = $this->categoryRepository->get();

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