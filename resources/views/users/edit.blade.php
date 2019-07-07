@extends('layout')

@section('content')

    <h1 class="title">Edit Contact</h1>


<form method="POST" action="/users/{{ $user->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="field">

            <label class="label" for="name">Name</label>

        <div class="control">

        <input type="text" class="input" name="name" placeholder="Name" value="{{ $user->name }}">

        </div>
        
        <div class="field">

            <label class="label" for="position">Position</label>
    
        <div class="control">
    
            <input type="text" class="input" name="position" placeholder="Position" value="{{ $user->position }}">
    
         </div>

         <div class="field">

            <label class="label" for="phone">Phone</label>
        
        <div class="control">
        
        <input type="text" class="input" name="phone" placeholder="Phone" value="{{ $user->phone }}">
        
        </div>

        <div class="field">
            <div class="control">

                <button type="submit" class="button is-link">Update Contact</button>

            </div>

        </div>

        </div>

    </form>
    

@endsection 