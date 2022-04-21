<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
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
                <button>Edit</button>
                <button>Remove</button>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>