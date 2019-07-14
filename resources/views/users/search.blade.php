@extends('layout')

@section('content')

    <h1>Search Results</h1>


@foreach ($users as $user)

    <p class="subtitle is-size-4 has-text-weight-semibold">
        Results:
    </p>
        Name: {{ $user->name }}
    </p>
    <p>
        Position: {{ $user->position }}
    </p>
    <p>
        Phone: {{ $user->phone }}
    </p>

@endforeach

<a href="/users">Back</a>

@endsection

