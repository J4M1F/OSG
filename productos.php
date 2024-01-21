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
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    border: 1px solid #ddd;
}
th {
    background-color: white;
}

td {
    vertical-align: middle;
    background-color: white;
}

tr a {
    text-decoration: none;
    color: black;
    font-weight: bold;
}

a:hover {
    color: #21618C;
}

    </style>
    <div class="pagina-productos" >
        <table>
            <tr >
                <th>Precio</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th></th>
            </tr>
        <?php    
       foreach($result as $clave => $valor):?>
        <tr>
            
            <td><?=$valor['precio'];?>$</td>
            <td><?=$valor['nombre'];?></td>
            <td><?=$valor['descripcion'];?></td>
            <td><img src="<?=$valor['imagen'];?>" alt="Imagen del producto"> <a href="agregar-producto.php?producto_id=<?=$valor['producto_id'];?>">Agregar a carrito</a></td>
       </tr>
       <?php endforeach; ?>    
       </table>
    </div>
   <?php
require "./compartidos/footer.php";
?> 