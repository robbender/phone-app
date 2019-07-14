@extends('layout')

@section('content')

    <h1>Search Results</h1>

    <p class="subtitle is-size-4 has-text-weight-semibold">
        Results:
    </p>


@foreach ($users as $user)


        Name: <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
        {{-- Name: {{ $user->name }} --}}
    </p>
    <p>
        Position: {{ $user->position }}
    </p>
    <p>
        Phone: {{ $user->phone }}
    </p>
    <br>
    <br>

@endforeach

<a href="/users">Back</a>

@endsection

