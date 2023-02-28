<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Post;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Post $post)
    {

        $user = auth()->user()->id;
        if($post->user_id == $user){
            $post->delete();
            return redirect()->route('personal.post.index');
        }else{
            return redirect()->route('personal.index');
        }
    }
}
