<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {

        $user = auth()->user()->id;
        if($post->user_id == $user){
            $categories = Category::all();
            $tags = Tags::all();
            return view('personal.post.edit', compact('post','categories','tags'));
        }else{
            return redirect()->route('personal.index');
        }
    }
}
