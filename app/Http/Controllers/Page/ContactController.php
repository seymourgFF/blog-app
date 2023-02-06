<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

}

