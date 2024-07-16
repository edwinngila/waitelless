<?php
// DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalCustomersServedToday = 107; // Replace with your actual logic
        $totalCancelledCustomers = 20; // Replace with your actual logic
        $waitingInLine = 100; // Replace with your actual logic
        $activeTellers = 8; // Replace with your actual logic
        $weeklyServedCustomers = 500; // Replace with your actual logic
        $monthlyCustomers = 2000; // Replace with your actual logic

        return view('admin.dash', compact(
            'totalCustomersServedToday',
            'totalCancelledCustomers',
            'waitingInLine',
            'activeTellers',
            'weeklyServedCustomers',
            'monthlyCustomers'
        ));
    }
}
