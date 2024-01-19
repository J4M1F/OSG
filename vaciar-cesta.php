<?php
session_start();
$_SESSION['cesta_usuario'] = [];
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>