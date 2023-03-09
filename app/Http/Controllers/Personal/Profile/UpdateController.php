<?php

namespace App\Http\Controllers\Personal\Profile;

use App\Http\Controllers\Personal\Profile\BaseController;
use App\Http\Requests\Personal\Profile\UpdateRequest;
use App\Models\User;

class UpdateController extends BaseController
{
    public function __invoke(User $user, UpdateRequest $request)
    {
        $data = $request->validated();
        $this->service->update($data, $user);
        return redirect()->route('personal.profile.show');
    }
}
