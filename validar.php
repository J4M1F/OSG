<?php
$mysqli = new mysqli("127.0.0.1","root","Javier17082004@","osg");
 if ($mysqli->connect_errno){
     echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
 }
 $nombre = $_POST['nombre'];
 $email = $_POST['email'];
 $contraseña = $_POST['contraseña'];

 $sql = "SELECT * FROM clientes Where nombre ='$nombre' and email = '$email' and contraseña = '$contraseña' ";

 $resultado= $mysqli->query($sql);

if($resultado->num_rows === 1){
    echo "Bienvenido de Nuevo";
    
    header('Location:tabla-productos.php');

}else{
    echo "Error: Usuario , Email o Contraseña incorectos";
}

$mysqli->close();
 ?>