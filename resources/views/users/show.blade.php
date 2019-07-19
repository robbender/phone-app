@extends('layout')

@section('content')

<h1 class="title">{{ $user->name }}</h1>

    <div class="content">

        <p>{{ $user->position }}</p>

        <p>{{ $user->phone }}</p>
        
    </div>

    @if ($user->tasks->count())

        <div>

            @foreach ($user->tasks as $task)
                
                <li>{{ $task->description }}</li>

            @endforeach
        </div>
    
    @endif

    <p>
    <a href="/users/{{ $user->id }}/edit">Edit</a>
    </p>


@endsection