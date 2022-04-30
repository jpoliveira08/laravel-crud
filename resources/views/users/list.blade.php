<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Users</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Contact List</h1>
        </div>
        <button type="button" class="btn" onclick="window.location='{{ route('userCreate') }}'">New Contact</button> 
        <div class="body">
            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    @if (isset($logged))
                    <th>Contact</th>
                    @endif
                    <th>Actions</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td> {{ $user['name'] }}</td>
                    <td> {{ $user['email'] }}</td>
                    @if (isset($logged))
                        <th>{{ $user['contact'] }}</th>
                    @endif
                    <td>
                        <button type="button" class="btn-edit" onclick="window.location='{{ route('userEdit', ['id' => $user->id]) }}'">Edit</button> 
                        <button type="button" class="btn-delete" onclick="window.location='{{ route('userDelete', ['id' => $user->id]) }}'">Delete</button> 
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>