<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(12);
        if(Post::get()->count() >= 4){
            $posts_rand = Post::get()->random(4);
        }else{
            $posts_rand = Post::all();
        }
        $categories = Category::all();
        $likedposts = Post::withCount('likedUsers')->orderBy('liked_users_count','DESC')->get()->take(3);
        return view('posts.index', compact('posts', 'posts_rand','likedposts','categories'));
    }
}
