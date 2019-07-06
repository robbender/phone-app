@extends('layout')

@section('content')

    <h1 class="title">Edit Contact</h1>


    <form action="">

        <div class="field">

            <label class="label" for="name">Name</label>

        <div class="control">

            <input type="text" class="input" name="name" placeholder="Name">

        </div>
        
        <div class="field">

            <label class="label" for="position">Position</label>
    
        <div class="control">
    
            <input type="text" class="input" name="position" placeholder="Position">
    
         </div>

         <div class="field">

            <label class="label" for="phone">Phone</label>
        
        <div class="control">
        
            <input type="text" class="input" name="phone" placeholder="Phone">
        
        </div>

        <div class="field">
            <div class="control">

                <button type="submit" class="button is-link">Update Contact</button>

            </div>

        </div>

        </div>

    </form>
    

@endsection 