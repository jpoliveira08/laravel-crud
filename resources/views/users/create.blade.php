<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New user</title>
</head>
<body>
    <form action="{{ route('userRegister') }}" method="POST">
        @csrf
        <label for="">Name</label> <br>
        <input type="text" name="name" placeholder="Name"><br>
        <label for="">Contact</label><br>
        <input type="text" name="contact" placeholder="Contact"><br>
        <label for="">Email</label><br>
        <input type="email" name="email" placeholder="Email"> <br>
        <button>Save</button>
    </form>
</body>
</html>