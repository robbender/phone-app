<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));

    }

    public function show(User $user)
    {

        return view('users.show', compact('user'));

    }

    public function create()
    {

        return view('users.create');

    }

    public function store()
    {
        User::create(request()->validate([
            'name' => ['required', 'min:2', 'max:120'],
            'position' => ['required', 'min:2'],
            'phone' => ['required', 'min:11', 'numeric'],
            'image' => ['max:1999'],
            // 'size' => ['']
        ]));

        // User::create($attributes);

        // $user = new User();

        // $user->name = request('name');
        // $user->position = request('position');
        // $user->phone = request('phone');

        // $user->save();

        return redirect('/users');

    }

    public function edit(User $user)
    {

        return view('users.edit', compact('user'));
        
    }

    public function update(User $user)
    {

        $user->update(request(['name', 'position', 'phone', 'image']));

        // $user->name = request('name');
        // $user->position = request('position');
        // $user->phone = request('phone');

        // $user->save();

        return redirect('/users');
        
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users');
    }

    public function search(User $user)
    {
        
        $q = Input::get('query');

        $users = User::where('name', 'LIKE', '%' . $q . '%' )->get();
        
        // dd($users);
        // return $users;
        return view('users.search', compact('users'));

    }
}
