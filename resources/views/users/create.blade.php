<!DOCTYPE html>
<html lang="en">
<head>

    <title>Create New User</title>
</head>
<body>
    <h1>Create New User</h1>

    <form method="POST" action="/users">

        {{ csrf_field() }}

        <div>

            <input type="text" name="name" placeholder="Name">

        </div>

        <div>

             <input type="text" name="postition" placeholder="Position">
    
        </div>

        <div>

            <input type="text" name="phone" placeholder="Phone">
       
        </div>

        <div>

            <button type="submit">Add User</button>

        </div>




    </form>
</body>
</html>