<?php

namespace App\Http\Controllers\Personal\Profile;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $user = auth()->user()->id;
        $posts = Post::all()->where('user_id','==',$user);
        return view('personal.post.index', compact('posts'));
    }
}
