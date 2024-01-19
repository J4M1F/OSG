<?php 
 $mysqli = new mysqli("127.0.0.1","root","Javier17082004@","osg");
 if ($mysqli->connect_errno){
     echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
 }
 $nombre = $_POST['nombre'];
 $email = $_POST['email'];
 $contraseña = $_POST['contraseña'];

 $sql = "INSERT INTO clientes (nombre,email,contraseña) VALUES ('$nombre','$email','$contraseña')";

if($mysqli->query($sql) === true){
    echo "Registro completado";
}
else{
    echo "error" . $mysqli->error;
}
header('Location:tabla-productos.php');
$mysqli->close();
?>