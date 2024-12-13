<?php

namespace App\Http\Controllers\Api;

use App\Constract\Interfaces\BannerInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Models\Banner;
use App\Services\BannerService;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    private BannerInterface $banner;
    private BannerService $service;

    public function __construct(BannerInterface $banner, BannerService $service)
    {
        $this->banner = $banner;
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        return response()->json($this->banner->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BannerRequest $request)
    {
        $data = $request->validated();
        $data["picture"] = $this->service->store($request);

        $this->banner->store($data);
        return response()->json();
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $data = $request->validated();

        if ($request->has("picture")) {
            $data["picture"] = $this->service->update($request, $banner);
        }

        $this->banner->update($banner->id, $data);

        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $this->banner->delete($banner->id);

        return response()->json();
    }
}
