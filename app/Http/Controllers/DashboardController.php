<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Return the view for the dashboard
        return view('dashboard'); // Make sure to create this view file
    }
}