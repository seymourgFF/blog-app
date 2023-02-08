<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Tags $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }
}
