<?php

namespace App\Http\Controllers\React;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            return auth()->check();
        }
        return view("react.auth");
    }
}
