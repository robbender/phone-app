@extends('layout')

@section('content')

<h1 class="title">{{ $user->name }}</h1>

    <div class="content">

        <p>{{ $user->position }}</p>

        <p>{{ $user->phone }}</p>

            <p>
                <a href="/users/{{ $user->id }}/edit">Edit</a>
            </p>
        
    </div>

    @if ($user->tasks->count())

        <div>

            @foreach ($user->tasks as $task)

            <div>
                <form action="">

                    <label class="checkbox" for="completed">

                        <input type="checkbox" name="completed">

                            {{ $task->description }}

                    </label>

                </form>
            </div>

            @endforeach
        </div>
    
    @endif


@endsection