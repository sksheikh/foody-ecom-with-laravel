<?php

namespace App\Http\Controllers;

use App\Models\TopHeader;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function topHeader()
    {
        return view('admin.includes.header.top-header');
    }

    public function addTopLeftHeader(Request $request)
    {
        TopHeader::addTopLeftHeader($request);
        return redirect()->back()->with('success','Top left Header info updated successfully');

    }


}
