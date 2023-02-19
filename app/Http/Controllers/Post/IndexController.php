<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(3);
        if(Post::get()->count() >= 4){
            $posts_rand = Post::get()->random(4);
        }else{
            $posts_rand = Post::all();
        }

        $likedposts = Post::withCount('likedUsers')->orderBy('liked_users_count','DESC')->get()->take(4);
        return view('posts.index', compact('posts', 'posts_rand','likedposts'));
    }
}
