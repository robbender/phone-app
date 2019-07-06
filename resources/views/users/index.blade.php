<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Directory</title>
</head>
<body>
    <h1>Directory</h1>

    @foreach ($users as $user)

        <li>{{ $user->name }}</li>
        <li>{{ $user->position }}</li>
        <li>{{ $user->phone }}</li>

    @endforeach

    
</body>
</html>