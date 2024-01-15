<?php
 $mysqli = new mysqli("127.0.0.1","root","Javier17082004@","osg");
 if ($mysqli->connect_errno){
     echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
 }
 $producto_id = $_POST['producto_id'];
 $proveedor_id = $_POST['proveedor_id'];
 $precio = $_POST['precio'];
 $stock = $_POST['stcok'];
 $nombre = $_POST['nombre'];
 $descripción = $_POST['descripción'];

 $sql = "INSERT INTO productos (producto_id,proveedor_id,precio,stcok,nombre,descripción) VALUES ('$producto_id','$proveedor_id','$precio','$stock','$nombre','$descripción')";

 if ($mysqli->query($sql) === TRUE){
    echo 'Producto agregado correctamente.';
 }else{
    echo 'Error al agregar producto' . $mysqli -> error;
 }
$mysqli->close();
?>