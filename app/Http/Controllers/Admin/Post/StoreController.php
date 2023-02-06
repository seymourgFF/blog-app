<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'title' =>'required|string',
            'content' =>'required|string',
            'description' =>'required|string',
            'category_id' => 'required|integer',
            'tags' => 'required|integer'
        ]);
        if(!empty($data['tags']))
        {
            $tags = $data['tags'];
            unset($data['tags']);
        }


        $post = Post::create($data);
        return redirect()->route('posts');
    }



}

