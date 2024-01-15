<?php
$mysqli = new mysqli("127.0.0.1","root","Javier17082004@","osg");
    if ($mysqli->connect_errno){
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
    }
    

    $producto_id = $_POST['producto_id'];
    $sql = "DELETE FROM productos WHERE producto_id = '$producto_id'";

    if($mysqli->query($sql) === TRUE){
        echo 'Producto eliminado correctamente.';
    }else{
        echo 'Error al eliminar el producto'. $mysqli->error;
    }
    $mysqli->close();

?>