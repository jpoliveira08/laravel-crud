<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Edit</title>
</head>

<body>
  <div class="container">
    <h1>Edit user</h1>
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
        <input type="text" name="name" placeholder="Name" value="{{ $user->name }}"><br>
        <label for="">Contact</label><br>
        <input type="text" name="contact" maxlength="9" placeholder="Contact (9 Digits)" value="{{ $user->contact }}"><br>
        <label for="">Email</label><br>
        <input style="margin-bottom: 10px" type="email" name="email" placeholder="Email" value="{{ $user->email }}"> <br>
        <div class="button-group">
            <button class="btn-save" type="submit">Save</button>
            <button type="button" class="btn-cancel" onclick="window.location='{{ route('usersList') }}'">Cancel</button>
        </div>
    </form>
  </div>
</body>
</html>