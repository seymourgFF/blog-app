<?php

namespace App\Http\Controllers\Personal\Profile;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Comments;
use App\Models\Post;
use App\Models\UserPosts;
use Egulias\EmailValidator\Exception\ExpectingAT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        //dd($data);
        $this->service->store($data);

        return redirect()->route('personal.post.index');
    }
}
