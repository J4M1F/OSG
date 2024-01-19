<?php
// Start the session
require "./conexion_bd.php";
$mysqli = conexion();
session_start();

$cestaActual=$_SESSION['cesta_usuario'] ?? [];
$productoId = $_GET['producto_id'];
$cantidadSelecionada = $_GET['cantidad'] ?? 1;
if (!isset($cestaActual[$productoId])) {
    $query = 'select p.producto_id, p.stock , p.descripcion , p.precio , p.imagen from productos p where p.producto_id = '.$productoId;
    $result = $mysqli->query($query);
    $producto = $result->fetch_assoc();
    $cestaItem = array(
        'producto_id'=> $producto['producto_id'],
        'cantidad'=> $cantidadSelecionada,
        'descripcion'=> $producto['descripcion'],
        'precio'=> $producto['precio'],
        'imagen'=> $producto['imagen']
    );
    $cestaActual[$productoId] = $cestaItem ; 
} 
else {
    $cestaActual[$productoId]['cantidad']+= $cantidadSelecionada;
}

$_SESSION['cesta_usuario'] = $cestaActual;
// Save data in the session
//$_SESSION['your_key'] = 'your_value';

?>