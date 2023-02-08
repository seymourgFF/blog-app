<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Tags $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tag.index');
    }
}
