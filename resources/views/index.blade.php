<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
    .main-text {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .btn {
        background: #3498db;
        color: #ffffff;
        border-radius: 8px;
        text-decoration: none;
        appearance: none;
            -webkit-appearance: none;
        font-family: sans-serif;
        cursor: pointer;
        padding: 12px;
        min-width: 100px;
    }
    .btn:hover {
        background: #2980b9;
    }
    
</style>
<body>
    <div class="main-text">
        <div class="title">
            <h1>Contact Management</h1>
        </div>
        <div class="body">
            <a class="btn" href="{{ route('usersList') }}">Proceed</a>
        </div>
    </div>
</body>
</html>