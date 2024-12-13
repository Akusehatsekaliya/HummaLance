<?php

namespace App\Http\Controllers\Admin;

use App\Constract\Interfaces\DashboardInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private DashboardInterface $dashboardInterface;

    public function __construct(DashboardInterface $dashboardInterface)
    {
        $this->dashboardInterface = $dashboardInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $totalUser = $this->dashboardInterface->getUser();
        $totalProject = $this->dashboardInterface->getProject();
        $totalContract = $this->dashboardInterface->getContract();

        if($request->ajax() || $request->api == true) {
            // return ;
            dd("Test");
         }

        return view('admin.dashboard', compact('totalUser', 'totalProject', 'totalContract'));
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
