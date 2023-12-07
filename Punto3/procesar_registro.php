<?php
    if ($_GET) {
        
        $usuario = $_GET["usuario"];
        $correo = $_GET["correo"];
        $contrasena = $_GET["contrasena"];

        $longitud = strlen($contrasena);//acá se obtiene el tamaño exacto de la contraseña

        $encriptar = str_repeat("*", $longitud);//acá cambia ese tamaño a asteriscos 

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <table class="default">
    <tr>
        <td>Nombre Usuario</td>
        <td>correo</td>
        <td>contraseña</td>
    </tr>
    <tr>
        <td><?php echo $usuario; ?></td>
        <td><?php echo $correo; ?></td>
        <td><?php echo $encriptar; ?></td>
    </tr>
    </table>

</body>
</html>