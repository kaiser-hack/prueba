<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>
    Hola {{$user->name}} {{$user->last_name}} segun la informacion que nos brindates tu correo es {{$user->email}} tu fecha de nacimiento es {{$user->fecha_nacimiento}} y tienes una edad de {{$user->edad}}
</p>
    
</body>
</html>