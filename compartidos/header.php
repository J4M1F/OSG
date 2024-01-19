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

      <input type="checkbox" id="menu" />
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
        <div class="cesta">
          <button id="cesta-link">
            <img src="imagenes/cesta2.png" class="cesta-img" id="cesta-img" alt="cesta">
          </button>
          <div class="cesta-box" id="cesta-box">
          <?php    
        $cestaActual=$_SESSION['cesta_usuario'] ?? [];

       foreach($cestaActual as $clave => $valor):?>  
          <div class="cesta-item">
          <img src="<?=$valor['imagen'];?>" alt="Imagen del producto"> <a href="agregar-producto.php?producto_id=<?=$valor['producto_id'];?>">
              <div class="descrition">
                <p><?=$valor['nombre'];?></p>
                <p>cantidad: <?=$valor['cantidad'];?></p>
              </div>
            </div>
            <?php endforeach; ?>
            <?php
            if(count($_SESSION['cesta_usuario'] ?? []) > 0) {?>

              <a href="vaciar-cesta.php" id="vaciar-cesta" class="btn-3">Vaciar Cesta</a>
              <br>
              <a href="cesta.php" id="vaciar-cesta" class="btn-3">Ver mi cesta</a>
            <?php
            }
            else{
              echo 'no tienes productos en tu cesta';
            }
            ?>
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
                      align-items: center;">
            <?php
            echo count($_SESSION['cesta_usuario'] ?? []);
            ?>
          </div>
        </div>
      </div>
    </div>
    <script src="script.js"></script>

  </header>