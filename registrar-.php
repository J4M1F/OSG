<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <h1>Registrar Usuario</h1>

    <form action="registrar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="email">Correo Electronico:</label>
        <input type="text" name="email" required>

        <label for="contraseña">Contraseña:</label>
        <input type="text" name="contraseña" required>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>