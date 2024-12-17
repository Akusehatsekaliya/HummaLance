<?php

namespace App\Http\Controllers\React;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    //
    public function index()
    {
        // return Inertia::render('react/auth', [
        //     'event' => "tesst",
        // ]);
        return view("react.auth");
    }
}
