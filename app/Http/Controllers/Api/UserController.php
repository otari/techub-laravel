<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\StoreUser;

class UserController extends Controller
{
    public function index(StoreUser $request)
    {
        $new_user = new User;
        $new_user->name = $request->name;
        $new_user->email = $request->email;
        $new_user->password = bcrypt($request->password);
        $new_user->save();

        return response('ok');
    }
}
