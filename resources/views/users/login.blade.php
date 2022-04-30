<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>New user</title>
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    @if ($errors->any())
      <div>
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form action="{{ route('checkLogin') }}" method="POST">
        @csrf
        <label for="">Email</label><br>
        <input type="email" name="email" placeholder="Email"> <br>
        <label for="">Contact</label><br>
        <input type="text" name="contact" maxlength="9" placeholder="Contact (9 Digits)"><br>
        <div class="button-group">
            <button class="btn-save" type="submit">Login</button>
            <button type="button" class="btn-cancel" onclick="window.location='{{ route('/') }}'">Cancel</button>
        </div>
    </form>
  </div>
</body>
</html>