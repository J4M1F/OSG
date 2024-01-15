<?php
 $mysqli = new mysqli("127.0.0.1","root","Javier17082004@","osg");
 if ($mysqli->connect_errno){
     echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
 }

 $producto_id = $_POST['producto_id'];
 $proveedor_id = $_POST['proveedor_id'];
 $precio = $_POST ['precio'];
 $stcok = $_POST ['stcok'];

 $sql = "UPDATE productos SET proveedor_id = '$proveedor_id', precio = '$precio', stcok = $stcok  WHERE producto_id = '$producto_id'";

 if($mysqli->query($sql) === TRUE){
    echo 'Producto modificado correctamente.';
 }else{
    echo 'Error al modificar producto.' . $mysqli->error;
 }

$mysqli->close();

?>