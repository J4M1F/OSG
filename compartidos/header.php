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
            <img src="../imagenes/menu2.png" class="menu-icono" alt="menu">
        </label>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="quienes-somos.php">Nosotros</a></li>
            </ul>
        </nav>
    <div>
            <ul>
                <li class="submenu" style="position: relative;">
                   <img src="imagenes/cesta.png.png" id="img-cesta" alt="cesta" >
                   <div id="cesta">
                    <table id="lista-cesta">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <a href="#" id="vaciar-cesta" class="btn-3">Vaciar Cesta</a>
                   </div>
                   <div style="background-color: red;
                               border-radius: 50%;
                               width: 20px;
                               height: 20px;
                               position: absolute;
                               top: -15px;
                               right: -15px;
                               color: black;
                               display: flex;
                               justify-content: center;
                               align-items: center;"
                    >
                    <?php
                    echo count($_SESSION['cesta_usuario']);
                    ?>
                    </div>
                </li>
            </ul>
        </div>
      </div>
     <script src="script.js"></script>
    
    </header>

