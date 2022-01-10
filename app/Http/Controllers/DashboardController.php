<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function kidDashboard(){
        return view('dashboards.kid');
    }
}
