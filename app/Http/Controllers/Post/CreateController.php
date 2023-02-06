<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke()
    {
        $cats = Category::all();
        $tags = Tag::all();
        return view('post.create',compact('cats', 'tags'));
    }


}

