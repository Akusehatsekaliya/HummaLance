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
        return view('home.about.index');
    }

    public function contact()
    {
        return view('home.contact.index');
    }

    public function jobs()
    {
        return view('home.pages.jobs');
    }

    public function profile()
    {
        return view('home.pages.profile');
    }

    public function chat()
    {
        return view('home.chat.index');
    }

    public function detailCompany()
    {
        return view('home.jobs_user.detailCompany');
    }

    public function detail()
    {
        return view('home.post_user.detail');
    }

    public function favorite()
    {
        return view('home.favorite.index');
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
