<?php
require "./compartidos/header.php";
require "./conexion_bd.php";
$mysqli = conexion();
//conectar con bases de datos
//constructor
if ($mysqli->connect_errno){
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}

$query = 'select * from productos';

$result = $mysqli->query($query);
?>
    <style>
        .pagina-productos {
            color:black;
        }
        .pagina-productos table {
            border-collapse: collapse;
            width: 100%;
        }
        .pagina-productos table td {
            color: black;
            border: 1px solid blue;
            text-align: center;
            padding: 1.3rem;
        }
        .pagina-productos .button {
            border-radius: .5rem;
            color: white;
            background-color: blue;
            padding: 1rem;
            text-decoration: none;
        }
    </style>
    <div class="pagina-productos">
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
       </table>
    </div>
   <?php
require "./compartidos/footer.php";
?> 