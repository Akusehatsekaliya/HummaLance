<?php

namespace App\Http\Controllers;

use App\Constract\Interfaces\CompanyInterface;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Services\CompanyService;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    private CompanyInterface $companyInterface;
    private CompanyService $companyService;

    public function __construct(CompanyInterface $companyInterface,CompanyService $companyService)
    {
        $this->companyInterface = $companyInterface;
        $this->companyService = $companyService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyRequest $request)
    {
        $this->companyService->store($request);

        return redirect()->route('')->with('success', 'Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
