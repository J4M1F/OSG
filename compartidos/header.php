<?php
// Start the session
session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        
      <div class="menu container">
        <a href="/osg/" class="logo">Old School Graff</a>
        
        <input type="checkbox" id="menu"/>
        <label for="menu">
            <img src="../imagenes/menu3.png" class="menu-icono" alt="menu">
        </label>
        <nav class="navbar">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Nosotros</a></li>
            </ul>
        </nav>
        <div>
            <ul>
                <li class="submenu" style="position: relative;">
                   <img src="imagenes/shopping_basket_FILL0_wght400_GRAD0_opsz24.png" id="img-cesta" alt="cesta">
                   <div style="background-color: red;
                               border-radius: 50%;
                               width: 20px;
                               height: 20px;
                               position: absolute;
                               top: -15px;
                               right: -15px;
                               color: white;
                               display: flex;
                               justify-content: center;
                               align-items: center;"
                    >
                    <?php
                    echo count($_SESSION['cesta_usuario']);

                        ?>
                    </div>
                   <div id="cesta">
                </li>
            </ul>
        </div>
      </div>
    </header>

