<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar usuario</h1>
    <form method="post" action="http://127.0.0.1:8000/clients/">
        @csrf
            <label>
                Nombre
            </label>
            <input type="text" value="{{$user->name}}"name="name">
            <br>
            <br>
            <label>
                LastName
            </label>
            <input type="text" value="{{$user->lastname}}" name="lastname">
            <br>
            <br>
            <label>
                Email
            </label>
            <input type="email" value="{{$user->email}}" name="email">
            <br>
            <br>
            <button>
                guardar
            </button>
    </form>
</body>
</html>