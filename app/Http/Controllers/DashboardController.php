<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showPageDashboard(Request $request)
    {
        $username = session('username', 'Guest');

        return view('dashboard', compact('username'));
    }
}
