<?php

namespace App\Http\Controllers\Admin;

use App\Constract\Interfaces\AboutInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use App\Services\AboutService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private AboutInterface $about;
    private AboutService $aboutService;

    public function __construct(AboutInterface $about, AboutService $aboutService) {
        $this->about = $about;
        $this->aboutService = $aboutService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = $this->about->get();
        return view('admin.about', compact('abouts'));
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
    }

    /**
     * Display the specified resource.
     */
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
    public function update(AboutRequest $request, About $about)
    {
        $data = $request->validated();
        $data["image"] = $this->aboutService->update($request, $about);
        $this->about->update($about->id, $data);

        flash()->success('About us edited successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
