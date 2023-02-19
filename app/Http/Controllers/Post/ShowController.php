<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        Carbon::setLocale('ru_rU');
        $date = Carbon::parse($post->created_at);
        $related_posts = Post::where('category_id',$post->category_id)->where('id', '!=',$post->id)->get()->take(3);
        $map_link = array_reverse(explode(', ', $post->map));
        $map_link = $map_link[0].'%2C'.$map_link[1];
        return view('posts.show', compact('post', 'date', 'related_posts','map_link'));
    }
}
