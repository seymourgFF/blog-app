<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comments;

class EditController extends Controller
{
    public function __invoke(Comments $comment)
    {
        return view('personal.comment.edit', compact('comment'));
    }
}
