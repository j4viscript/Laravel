<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Hola {{ Auth::user()->name}}</h1>

    <a href="{{url('users')}}">Ir a usuarios</a>
    <br>
    <br>
    <form method="post" action="{{ url('logout')}}">
        @csrf
        <button type="submit">
            Cerrar Sesion
        </button>
    </form>
</body> 
</html>