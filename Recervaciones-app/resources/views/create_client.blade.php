<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
</head>
<body>
    

<form method="post" action="http://127.0.0.1:8000/clients/">
    @csrf
        <label>
            Nombre
        </label>
        <input type="text" name="name">
        <br>
        <br>
        <label>
            LastName
        </label>
        <input type="text" name="lastname">
        <br>
        <br>
        <label>
            Phone Number
        </label>
        <input type="text" name="phone_number">
        <br>
        <br>
        <label>
            Email
        </label>
        <input type="email" name="email">
        <br>
        <br>
        <button>
            guardar
        </button>
</form>
</body>
</html>