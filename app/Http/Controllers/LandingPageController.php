<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    public function aboutUs()
    {
        return view('landing.about.index');
    }

    public function contact()
    {
        return view('landing.contact.index');
    }

    public function jobs()
    {
        return view('landing.pages.jobs');
    }

    public function profile()
    {
        return view('landing.pages.profile');
    }

    public function chat()
    {
        return view('landing.chat.index');
    }

    public function detailCompany()
    {
        return view('landing.jobs_user.detailCompany');
    }

    public function detail()
    {
        return view('landing.post_user.detail');
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
