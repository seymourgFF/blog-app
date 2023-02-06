<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke(Category $cat)
    {
        $posts = $cat->posts;
        return view('cats.show',compact('posts'));
    }

}

