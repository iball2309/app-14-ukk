<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function register()
    {
        return view('auth.register_admin');
    }
    public function create()
    {
    }
}
