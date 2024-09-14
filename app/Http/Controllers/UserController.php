<?php

namespace App\Http\Controllers;

use App\Models\UserModel;

class UserController extends Controller
{
    public function profile($id, $name)
    {
        $user = UserModel::all();

        return view ('user', ['data' => $user]);

    }
}