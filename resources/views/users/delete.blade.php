<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Delete</title>
</head>
<body>
    <div class="container">
        <h1>Delete</h1>
        <form action="{{ route('userDestroy', ['id' => $user->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            Are you sure you want to delete the data from {{ $user->name }} ?
            <div style="display: inline">
                <button class="btn-save" type="submit">Yes</button>
                <button type="button" class="btn-cancel" onclick="window.location='{{ route('usersList') }}'">No</button>
            </div>
        </form>
    </div>
</body>
</html>