<?php
session_start();
$productoId = $_GET['producto_id'];
if(isset($_SESSION['cesta_usuario'][$productoId])) {
    unset($_SESSION['cesta_usuario'][$productoId]);
}

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>