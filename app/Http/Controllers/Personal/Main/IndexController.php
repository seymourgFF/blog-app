<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        /*$users_count = User::all()->count();
        $posts_count = Post::all()->count();
        $tags_count = Tags::all()->count();
        $categories_count = Category::all()->count();*/
        $postsLikesCount = auth()->user()->likedPosts->count();
        $postsCommentCount = auth()->user()->comments->count();
        return view('personal.main.index', compact('postsLikesCount','postsCommentCount'));
    }
}
