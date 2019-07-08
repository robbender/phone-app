@extends('layout')

@section('content')
  
    <title>Directory</title>

    <h1 class="title is-size-1">Directory</h1>

    @foreach ($users as $user)

    <div class="card">
        <div class="card-header-title is-size-1">
            <br>
            <p>
                <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
            </p>
        </div>

        <div class="card-image">

        </div>

        <div class="card-content">

        <p class="subtitle is-size-4 has-text-weight-semibold">
            Position:
            {{ $user->position }}
        </p>

        <p class="subtitle is-size-4 has-text-weight-semibold">
            Phone:
            {{ $user->phone }}
        </p>
        <div class="field is-grouped is-grouped-right">
                <p class="control">
                    <a href="/users/{{ $user->id }}/edit" class="button is-info">Edit</a>

                    {{-- <button type="submit" class="button is-link">Update</button> --}}
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
    <br>
    @endforeach
    <br>

    <p class="control">
        <a href="/users/create" class="button is-info is-pulled-right">New Contact</a>
    </p>

    @endsection