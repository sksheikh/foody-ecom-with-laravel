<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\TopHeader;

class FrontController extends Controller
{
    public $topLeftHeader,$sliders;

    public function home()
    {
        $this->topLeftHeader = TopHeader::all();
        $this->sliders = Slider::all();
        return view('front.home.index',[
            'topLeftHeader'=>$this->topLeftHeader,
            'sliders'=>$this->sliders
        ]);
    }

    public function about()
    {
        return view('front.about.index');
    }

    public function product()
    {
        return view('front.product.index');
    }

    public function blog()
    {
        return view('front.blog.index');
    }

    public function contact()
    {
        return view('front.contact.index');
    }
}
