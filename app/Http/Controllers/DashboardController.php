<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Method to handle dashboard logic
    public function dashboard()
    {
        // You can return a view or handle the dashboard logic here
        return view('dashboard'); // Assuming you have a 'dashboard.blade.php' view
    }
}
