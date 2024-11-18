<?php

namespace App\Constract\Repositories;

use App\Constract\Interfaces\CategoryInterface;
use App\Models\Category;

class CategoryRepository extends BaseRepository implements CategoryInterface
{
  /**
   * Prepare category model for instant data retrieval and manipulation.
   *
   * @param Category
   * @return void
   */

  public function __construct(Category $category)
  {
    $this->model = $category;
  }

  /**
   * Handle the Get all data event from models.
   *
   * @return mixed
   */
  public function get(): mixed
  {
    return $this->model->select(['id', 'name'])->get();
  }

  public function update(mixed $id, array $data): mixed
  {
    return $this->model->query()->findOrFail($id)->update($data);
  }
}