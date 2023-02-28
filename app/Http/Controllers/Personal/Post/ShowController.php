<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        $user = auth()->user()->id;
        if($post->user_id == $user){
            return view('personal.post.show', compact('post'));
        }else{
            return redirect()->route('personal.index');
        }

    }
}
