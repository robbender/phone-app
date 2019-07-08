@extends('layout')

@section('content')

    <h1 class="title">Create New User</h1>

    <form method="POST" action="/users">

        @csrf

        <div class="field">

            <input class="input" type="text" name="name" placeholder="Name">

        </div>

        <div class="field">

             <input class="input" type="text" name="position" placeholder="Position">
    
        </div>

        <div class="field">

            <input class="input" type="text" name="phone" placeholder="Phone">
       
        </div>

        <div class="control">

            <button type="submit">Add User</button>

        </div>

    </form>


    @endsection 