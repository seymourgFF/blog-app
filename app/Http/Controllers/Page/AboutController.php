<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('about');
    }

}

