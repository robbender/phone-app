@extends('layout')

@section('content')

    <h1 class="title is-size-1">Create New Contact</h1>
    <br>

    <form method="POST" action="/users">

        @csrf

        <div class="field">

            <label class="label" for="name"></label>

            <div class="control">

            <input type="text" class="input is-large {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" placeholder="name" value="{{ old('name') }}" required>

            </div>
        </div> 

        <div class="field">

             <label class="label" type="text" name="position"></label>

            <div class="control">

                <input type="text" class="input is-large {{ $errors->has('position') ? 'is-danger' : '' }}" name="position" placeholder="position" value="{{ old('position') }}" required>
                
            </div>
        </div>

        <div class="field">

            <label class="label is-large" type="text" name="phone"></label>

            <div class="control">

                <input type="text" class="input is-large {{ $errors->has('phone') ? 'is-danger' : '' }}" name="phone" placeholder="phone" value="{{ old('phone') }}" required>
                
            </div>
        </div>

        <div class="field">
                {{-- <label class="label is-large" type="text" name="image"></label> --}}
                <input type="file" class="input is-large {{ $errors->has('image') ? 'is-danger' : '' }}" name="image" placeholder="Image" required>
        
        </div>
        <br>

        <div class="field">

            <div class="control">

                <button type="submit" class="button is-info is-medium">Add User</button>

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