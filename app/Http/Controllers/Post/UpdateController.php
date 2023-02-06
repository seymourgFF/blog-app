<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(Post $post)
    {
        $data = request()->validate([
            'title' =>'string',
            'content' =>'string',
            'description' =>'string',
            'category_id' => 'integer',
            'tags' => ''
        ]);
        if(!empty($data['tags'])){
            $tags =$data['tags'];
            unset($data['tags']);
            $post->tags()->sync($tags);
        }else{
            $post->tags()->sync('');
        }

        $post->update($data);

        return view('post.thisPost',compact('post'));
    }

}

