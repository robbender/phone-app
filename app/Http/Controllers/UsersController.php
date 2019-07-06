<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));

    }

    public function create()
    {

        return view('users.create');

    }

    public function store()
    {
        $user = new User();

        $user->name = request('name');
        $user->position = request('postition');
        $user->phone = request('phone');

        $user->save();

        return redirect('/users');

    }
}
