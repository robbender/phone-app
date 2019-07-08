@extends('layout')

@section('content')

    <h1 class="title is-size-1">Create New Contact</h1>
    <br>

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

        <div>

            

        </div>

        <div class="control">

            <button type="submit" class="button is-info">Add User</button>

        </div>

    </form>


    @endsection 