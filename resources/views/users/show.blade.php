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
            <form method="POST" action="/tasks/{{ $task->id }}">
                    @method('PATCH')

                    <label class="checkbox" for="completed">

                        <input type="checkbox" name="completed" onChange="this.form.submit()">

                            {{ $task->description }}

                    </label>

                </form>
            </div>

            @endforeach
        </div>
    
    @endif


@endsection