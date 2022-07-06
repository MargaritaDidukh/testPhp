<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getList()
    {
        return view('users.list')
            ->with('users', User::orderBy('updated_at', 'DESC')->get());
    }

    public function getUser($id)
    {
        return view('users.profile')
            ->with('user', User::where('id', '=', $id)->first());
    }
}
