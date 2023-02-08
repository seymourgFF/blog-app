<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Requests\Admin\Post\UpdateRequest;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $post->update($data);
        //return view('admin.categories.show', compact('category'));
        return redirect()->route('admin.post.show', compact('post'));
    }
}
