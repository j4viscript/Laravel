<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
    <h1>Usuarios del sistema</h1>
    <ol>
        @foreach ($users as $user)
            <li>
                {{$user->name}}
                <a href="{{url('/users', $user->id)}}">Editar</a>
            </li>
        @endforeach
    </ol>
</body>
</html>