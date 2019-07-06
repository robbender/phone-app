<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Phoneuser;

class PhoneusersController extends Controller
{
    public function index()
    {
        $users = user::all();

        return $users;

        return view('users.index');

    }
}
