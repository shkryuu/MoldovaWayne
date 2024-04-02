<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('pages.admin.slides');
    }

    public function create()
    {
        return view('pages.admin.add-slide');
    }
}
