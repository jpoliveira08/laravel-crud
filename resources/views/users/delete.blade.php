<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
</head>
<body>
    <form action="{{ route('userDestroy', ['id' => $user->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <label for="">Are you sure you want to delete the data from {{ $user->name }} </label><br>
        <button type="submit">Yes</button>
        <a href="{{ route('usersList') }}">No</a>
    </form>
</body>
</html>