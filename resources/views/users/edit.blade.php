<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    @if ($errors->any())
      <div>
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form action="{{ route('userUpdate', ['id' => $user->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Name</label> <br>
        <input type="text" name="name" placeholder="Name" value="{{  $user->name }}"><br>
        <label for="">Contact</label><br>
        <input type="text" name="contact" maxlength="9" placeholder="Contact (9 Digits)"><br>
        <label for="">Email</label><br>
        <input type="email" name="email" placeholder="Email" value="{{  $user->email }}"> <br>
        <button type="submit">Save</button>
        <a href="{{ route('usersList') }}">Cancel</a>
    </form>
</body>
</html>