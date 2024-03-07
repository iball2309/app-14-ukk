<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $dashboard = Dashboard::latest()->paginate(5);
        return view('dashboard', compact('dashboard'));
    }
}