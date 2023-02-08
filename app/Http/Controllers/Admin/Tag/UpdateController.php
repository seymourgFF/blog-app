<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Tags $tag)
    {
        $data = $request->validated();
        $tag->update($data);
        //return view('admin.categories.show', compact('category'));
        return redirect()->route('admin.tag.show', compact('tag'));
    }
}
