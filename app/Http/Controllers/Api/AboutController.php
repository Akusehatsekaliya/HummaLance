<?php

namespace App\Http\Controllers\Api;

use App\Constract\Interfaces\AboutInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use App\Services\AboutService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private AboutInterface $about;
    private AboutService $service;
    private About $model;

    public function __construct(AboutInterface $about, AboutService $service)
    {
        $this->about = $about;
        $this->service = $service;
        $this->model = $this->about->get()[0];
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return response()->json($this->model);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(AboutRequest $request)
    {
        $data = $request->validated();

        if ($request->has("image")) {
            $data["image"] = $this->service->update($request, $this->model);
        }

        $this->about->update($this->model->id, $data);

        return response()->json();
    }
}
