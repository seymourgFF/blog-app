<?php

namespace App\Http\Controllers\Personal\Profile;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke()
    {
        $user = auth()->user();
        return view('personal.profile.show', compact('user'));

    }
}
