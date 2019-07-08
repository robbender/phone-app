<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Directory</title>
</head>
<body>
    <h1>Directory</h1>

    @foreach ($users as $user)

        <p>
        <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
        </p>

        <p>
            {{ $user->position }}
        </p>

        <p>
            {{ $user->phone }}
        </p>

    @endforeach

    
</body>
</html>