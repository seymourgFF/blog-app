<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $user = Auth::user();
        $posts = Post::all();
        return view('personal.post.index', compact('posts'));
    }
}
