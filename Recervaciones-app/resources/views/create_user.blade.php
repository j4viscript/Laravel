<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Registros de usuarios</h1>
    <form method="post" action="http://127.0.0.1:8000/users/">
        @csrf
        <label>
            Nombre
        </label>
        <input type="text" name="name">

        <label>
            Email
        </label>
        <input type="email" name="email">
        <button>
            guardar
        </button>

    </form>    


</body>
</html>