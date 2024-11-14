<?php

namespace App\Http\Controllers\Admin;

use App\Constract\Interfaces\BannerInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Models\Banner;
use App\Services\BannerService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

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
        $banner = $this->banner->get();
        $service = $this->service;

        if ($request->ajax() || $request->wantsJson()) {
            return DataTables::of($banner)
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.banner', compact('banner', 'service'));
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
        $data = $request->validated();
        $data["picture"] = $this->service->store($request);

        $this->banner->store($data);

        flash()->success('Data berhasil Diperbarui.');
        return redirect()->back();
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
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $data = $request->validated();
        $data["picture"] = $this->service->update($request, $banner);

        $this->banner->update($banner->id, $data);

        flash()->success('Data berhasil Diperbarui.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    { {
            if (!$this->banner->delete($banner->id)) {

                return back()->with('error');
            }

            return back();
        }
    }
}