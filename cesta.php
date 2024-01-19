<?php
require "./compartidos/header.php";
require "./conexion_bd.php";
$mysqli = conexion();
//conectar con bases de datos
//constructor
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}

?>
<style>
    .pagina-productos {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: white;
    }

    td {
        vertical-align: middle;
        background-color: white;
    }

    tr a {
        text-decoration: none;
        color: black;
        font-weight: bold;
    }

    a:hover {
        color: #21618C;
    }
</style>
<div class="pagina-productos">

    <?php
    if (count($_SESSION['cesta_usuario'] ?? []) > 0) { ?>
        <table>
            <tr>
                <th>Precio</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            $cestaActual = $_SESSION['cesta_usuario'] ?? [];

            foreach ($cestaActual as $clave => $valor) : ?>
                <tr>

                    <td><?= $valor['precio']; ?>$</td>
                    <td><?= $valor['nombre']; ?></td>
                    <td><?= $valor['descripcion']; ?></td>
                    <td><?= $valor['cantidad']; ?></td>
                    <td><img src="<?= $valor['imagen']; ?>" alt="Imagen del producto"> <a href="agregar-producto.php?producto_id=<?= $valor['producto_id']; ?>"></td>
                    <td><a href="borrar-producto.php?producto_id=<?= $valor['producto_id']; ?>">Borrar</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php } else {
        echo 'no tienes productos en tu cesta';
    }
    ?>
</div>
<?php
require "./compartidos/footer.php";
?>