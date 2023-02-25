<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $sliders,$slider;

    public function dashboard()
    {
        return view('admin.dashboard.dashboard');
    }


}
