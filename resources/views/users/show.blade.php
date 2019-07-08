@extends('layout')

@section('content')

<h1 class="title">{{ $user->name }}</h1>

    <div class="content">

        <p>{{ $user->position }}</p>

        <p>{{ $user->phone }}</p>
        
    </div>

    <p>
    <a href="/users/{{ $user->id }}/edit">Edit</a>
    </p>


@endsection