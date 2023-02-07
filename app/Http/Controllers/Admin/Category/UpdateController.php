<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\Admin\Category\UpdateRequest;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        //return view('admin.categories.show', compact('category'));
        return redirect()->route('admin.category.show', compact('category'));
    }
}
