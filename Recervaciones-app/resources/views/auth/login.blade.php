<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>login</h1>
    <form method="post" action="{{url('login')}}">
        @csrf
        <label>Email</label>
        <input type="email" name="email">
        <br>
        <br>
        <label>Passord</label>
        <input type="password" name="password">
        <br>
        <br>
        <button>
            Acceder
        </button>
    </form>
</body>
</html>