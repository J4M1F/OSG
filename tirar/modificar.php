<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
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
            background-color: #e68a00;
        }
    </style>
</head>
<body>
    <h1>Modificar Datos</h1>
    <form action="modificar_bd.php" method="POST">
        <label for="producto_id">ID del producto a modificar:</label>
        <input type="text" name="producto_id" required>

        <label for="proveedor_id">Nuevo Id de proveedor:</label>
        <input type="text" name="proveedor_id">

        <label for="precio">Nuevo valor del producto:</label>
        <input type="text" name="precio">

        <label for="stcok">Nueva cantidad de Stock:</label>
        <input type="text" name="stcok">

        <input type="submit" value ="Modificar datos del producto">
</body>
</html>