@extends('layout')

@section('content')
  
    <title>Directory</title>

    <h1 class="title">Directory</h1>

    @foreach ($users as $user)

    <div class="card">
        <div class="card-body">

        <p>
        <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
        </p>

        <p class="subtitle">
            {{ $user->position }}
        </p>

        <p class="subtitle">
            {{ $user->phone }}
        </p>
        <div class="field is-grouped is-grouped-right">
                <p class="control">
                    <a href="/users/{{ $user->id }}/edit" class="button is-info">Edit</a>
                </p>
                    <form method="POST" action="/users/{{ $user->id }}">
                        @method('DELETE')
                        @csrf
                        <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-danger">Delete</button>
                        </div>
                        </div>
                    </form>
                
              </div>
        </div>
    </div>

    @endforeach

    @endsection