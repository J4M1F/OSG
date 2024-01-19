
<?php
require "./compartidos/header.php";
?>
<div class="header-content container">
        <div class="header-img">
            <img src="imagenes/1-madmaxxx856.jpg" alt="">
        </div>
        <div class="header-txt">
            <h1>Nuestras mejores latas</h1>
            <p>Que no te preocupe quedarte a medias!!!</p>
            
        </div>

      </div>

    

    <section class="ofert container">
        <div class="ofert-1">
            <div class="ofert-img">
                <img src="imagenes/wb-family349.jpg" alt="">
            </div>
            <div class="ofert-txt">
                <h3>Base agua para todos!!</h3>
                
            </div>
        </div>

        <div class="ofert-1">
            <div class="ofert-img">
                <img src="imagenes/super-skinny-cap-120132.jpg" alt="">
            </div>
            <div class="ofert-txt">
                <h3>Olvidate de las Super Skinny</h3>
                
            </div>
        </div>
        <div class="ofert-1">
            <div class="ofert-img">
                <img src="imagenes/super-fat-cap-120597.jpg" alt="">
            </div>
            <div class="ofert-txt">
                <h3>Olvidate de las Fat Cap</h3>
                
            </div>
        </div>
    </section>
    <main class="product container" id="lista-1">
        <h2>Productos</h2>
        <div class="product-content">
        <?php
        require "./conexion_bd.php";
        $mysqli = conexion();
        //conectar con bases de datos
        //constructor
       
        
        
        $query = 'select * from productos where es_popular = 1';
        
        $result = $mysqli->query($query);
        foreach ($result as $clave => $valor):?>
            <div class="product">
                <img src="<?=$valor['imagen'];?>" alt="Imagen del producto">
                <div class="product-txt">
                    <h3><?php echo $valor['descripcion']; ?></h3>
                    <p>Calidades premium</p>
                    <p class="precio"><?php echo $valor['precio']; ?>$</p>
                    <a href="agregar-producto.php?producto_id=<?=$valor['producto_id'];?>" class="agregar-cesta btn-2">Agregar a carrito</a>
                </div>
            </div>
        <?php endforeach;
        ?>
            <div class="product">
                <img src="imagenes/mega215.jpg" alt="">
                <div class="product-txt">
                    <h3>Esenciales para tu pieza</h3>
                    <p>Calidades premium</p>
                    <p class="precio">4,75$</p>
                    <a href="agregar-producto.php?producto_id=<?=$valor['producto_id'];?>" class="agregar-cesta btn-2">Agregar a carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="imagenes/street-dabber-18-paint3627.jpg" alt="">
                <div class="product-txt">
                    <h3>No te olvides de pintar los cristales</h3>
                    <p>Calidades premium</p>
                    <p class="precio">6$</p>
                    <a href="agregar-producto.php?producto_id=<?=$valor['producto_id'];?>" class="agregar-cesta btn-2">Agregar a carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="imagenes/NY-metro.jpg" alt="">
                <div class="product-txt">
                    <h3>Hazte la pieza en casa</h3>
                    <p>Calidades premium</p>
                    <p class="precio">9,20$</p>
                    <a href="agregar-producto.php?producto_id=<?=$valor['producto_id'];?>" class="agregar-cesta btn-2">Agregar a carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="imagenes/cuaderno.jpg" alt="">
                <div class="product-txt">
                    <h3>Crea tu bozeto</h3>
                    <p>Calidades premium</p>
                    <p class="precio">5,25$</p>
                    <a href="agregar-producto.php?producto_id=<?=$valor['producto_id'];?>" class="agregar-cesta btn-2">Agregar a carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="imagenes/cinturon.jpg" alt="">
                <div class="product-txt">
                    <h3>Cuida tus latas</h3>
                    <p>Calidades premium</p>
                    <p class="precio">39,99$</p>
                    <a href="agregar-producto.php?producto_id=<?=$valor['producto_id'];?>" class="agregar-cesta btn-2">Agregar a carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="imagenes/guantes.jpg" alt="">
                <div class="product-txt">
                    <h3>Guantes de nitrilio</h3>
                    <p>Calidades premium</p>
                    <p class="precio">29,99$</p>
                    <a href="agregar-producto.php?producto_id=<?=$valor['producto_id'];?>" class="agregar-cesta btn-2">Agregar a carrito</a>
                </div>
            </div>
        </div>

    </main>
   



    </section>
    <section class="blog container">
        <div class="blog-1">
            <img src="imagenes/latas.jpeg" alt="">
            <h3>Blog 1</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
        </div>
        <div class="blog-1">
            <img src="imagenes/mural.jpg" alt="">
            <h3>Blog 2</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
        </div>
        <div class="blog-1">
            <img src="imagenes/plano-lata.jpg" alt="">
            <h3>Blog 3</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
        </div>
    </section>
     <?php
require "./compartidos/footer.php";
?>  