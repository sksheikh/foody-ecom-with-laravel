<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $sliders,$slider;
    public function dashboard()
    {
        return view('admin.dashboard.dashboard');
    }

    public function addSlider()
    {
        return view('admin.slider.add');

    }

    public function createSlider(Request $request)
    {
        Slider::createSlider($request);
        return redirect()->back()->with('success','Created slider successfully');

    }
    public function manageSlide()
    {
        $this->sliders = Slider::orderBy('id','DESC')->get();
        return view('admin.slider.manage',[
            'sliders'=>$this->sliders,
        ]);

    }
}
