<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div>
            <h1>Contact Management</h1>
        </div>
        <div>
            <button type="button" class="btn" onclick="window.location='{{ route('userLogin') }}'">Login</button> 
        </div>
        <div>
            <button type="button" class="btn" onclick="window.location='{{ route('usersList') }}'">Proceed without login</button>
        </div>
    </div>
</body>
</html>