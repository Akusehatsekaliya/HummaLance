<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReactController extends Controller
{
    //
    public function landing()
    {
        return view("react.landing");
    }
    public function auth()
    {
        return view("react.auth");
    }
    public function admin()
    {
        return view("react.admin");
    }
}
