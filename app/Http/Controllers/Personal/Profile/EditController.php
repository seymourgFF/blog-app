<?php

namespace App\Http\Controllers\Personal\Profile;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke()
    {

        $user = auth()->user();
        return view('personal.profile.edit', compact('user'));
    }
}
