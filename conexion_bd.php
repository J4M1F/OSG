<?php
function conexion(){
    $user="root";
    $pass="Javier17082004@";
    $server="localhost";
    $bd="osg";
    //$conexion=mysql_conenect($user,$bd,$server,$pass) or die ("Error conectar".mysql_error());
    $mysqli = new mysqli($server,$user,$pass,$bd);
    if ($mysqli->connect_errno){
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
        exit();
    }
    return $mysqli;
}

?>