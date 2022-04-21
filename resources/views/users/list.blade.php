<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>Contact List</h1>
    <a href="{{ route('userCreate') }}">New Contact</a>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Actions</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td> {{ $user['name'] }}</td>
            <td> {{ $user['email'] }}</td>
            <td>
                <a type="button" href="{{ route('userEdit', ['id' => $user->id]) }}">Edit</a>
                <a type="button" href="{{ route('userDelete', ['id' => $user->id]) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>