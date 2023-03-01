<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\FilterRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(PostFilter::class,['queryParams'=> array_filter($data)]);
        $posts = Post::filter($filter)->paginate(10);
        $cats = Category::all();
        return view('posts.find.index', compact('posts','cats' ));
    }
}
