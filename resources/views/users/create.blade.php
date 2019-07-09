@extends('layout')

@section('content')

    <h1 class="title is-size-1">Create New Contact</h1>
    <br>

    <form method="POST" action="/users">

        @csrf

        <div class="field">

            <label class="label" for="name"></label>

            <div class="control">

                <input type="text" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" placeholder="name">

            </div>
        </div>

        <div class="field">

             <label class="label" type="text" name="position" placeholder="Position" required></label>

            <div class="control">

                <input class="input {{ $errors->has('position') ? 'is-danger' : '' }}" type="text" placeholder="position">
                
            </div>
        </div>

        <div class="field">

            <label class="label is-large" type="text" name="phone" placeholder="Phone" required></label>

            <div class="control">

                <input class="input {{ $errors->has('phone') ? 'is-danger' : '' }}" type="text" placeholder="phone">
                
            </div>
        </div>

        <div>

            

        </div>

        <div class="field">

            <div class="control">

                <button type="submit" class="button is-info is-large">Add User</button>

            </div>
        </div>

        @if ($errors->any())

        <div class="notification is-danger">

            <ul>
                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach


            </ul>
             
        </div>

        @endif

    </form>


    @endsection 