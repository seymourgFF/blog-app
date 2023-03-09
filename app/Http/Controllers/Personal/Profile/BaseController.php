<?php

namespace App\Http\Controllers\Personal\Profile;

use App\Http\Controllers\Controller;
use App\Service\UserServices;

class BaseController extends Controller
{
    public $service;
    public function __construct(UserServices $service)
    {
        $this->service = $service;
    }
}
