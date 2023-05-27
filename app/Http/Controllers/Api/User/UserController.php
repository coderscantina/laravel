<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\OwnUserResource;

class UserController extends Controller
{
    public function show()
    {
        return new OwnUserResource(auth()->user());
    }
}
