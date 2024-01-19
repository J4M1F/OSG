<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo producto</title>
    <style> body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #333;
        }

        input {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: blue;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: blue;
        }</style>
</head>
<body>
   <h1>Agregar producto</h1> 
   <form action ="procesar.php" method="post">

    <label for ="producto_id">Numero:</label>
    <input type="text" name="producto_id" required>

    <label for ="proveedor_id">Numero De Proveedor:</label>
    <input type="text" name="proveedor_id" required>

    <label for ="precio">Precio:</label>
    <input type="text" name="precio" required>

    <label for ="stcok">Cantidad:</label>
    <input type="text" name="stcok" required>

    <label for ="nombre">Nombre:</label>
    <input type="text" name="nombre" required>

    <label for ="descripción">Descripción:</label>
    <input type="text" name="descripción" required>

    <input type="submit" value="Agregar Producto">

</body>
</html>