<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Interfaces\BannerInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Services\BannerService;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    private BannerInterface $interface;
    private BannerService $service;

    public function __construct(BannerInterface $interface, BannerService $service)
    {
        $this->interface = $interface;
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $service = $this->service;

        return view('admin.banner', compact('service'));
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
    public function store(BannerRequest $request)
    {
        $data["picture"] = $this->service->store($request);

        $this->interface->store($data);

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
