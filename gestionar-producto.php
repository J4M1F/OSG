<html>

<head>
  <title>B.D</title>  
</head>
<body>
    <?php
    //conectar con bases de datos
    //constructor
    $mysqli = new mysqli("127.0.0.1","root","Javier17082004@","osg");
    if ($mysqli->connect_errno){
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
    }

    $query = 'select * from productos';
    
    $result = $mysqli->query($query);
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leer - CRUD PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table td {
            border: 1px solid blue;
            text-align: center;
            padding: 1.3rem;
        }
        .button {
            border-radius: .5rem;
            color: white;
            background-color: blue;
            padding: 1rem;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <p><a class="button" href="nuevo.php">Crear</a></p>
    <p><a class="button" href="modificar.php">Modificar</a></p>
    <p><a class="button" href="borrar.php">Borrar</a></p>
    

    <table>
        <tr>
            <th>Producto_id</th>
            <th>Proveedor_id</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acción</th>
        </tr>
    <?php    
   foreach($result as $clave => $valor):?>
    <tr>
        <td><?=$valor['producto_id'];?></td>
        <td><?=$valor['proveedor_id'];?></td>
        <td><?=$valor['precio'];?></td>
        <td><?=$valor['stock'];?></td>
        <td><?=$valor['nombre'];?></td>
        <td><?=$valor['descripcion'];?></td>
        <td> <a href="agregar-producto.php?producto_id=<?=$valor['producto_id'];?>">Agregar a carrito</a></td>
   </tr>
   <?php endforeach; ?>    
 </body>
</html>    