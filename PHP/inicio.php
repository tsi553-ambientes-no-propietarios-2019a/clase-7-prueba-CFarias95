<?php
session_start();
if ($_GET) {
    if (isset($_GET['error_message'])) {
        $error_message = $_GET['error_message'];
    }
}
if (isset($_SESSION['user'])) {
    $nombre = $_SESSION['user'];
    $con = mysqli_connect("localhost", "root", "", "pruebab1");
    $sql = "SELECT nombretienda FROM tienda WHERE usuario='$nombre'";
    $res = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($res)) {
        $tienda = $row['nombretienda'];
    }
    $sql1 = "SELECT codigo, nombre, tipo, cantidad, precio FROM productos where tienda='$nombre'";
    $res2 = mysqli_query($con, $sql1);
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Inicio</title>
    </head>

    <body>
        <center>
            <div>
                <h1>Bienvenido <?php echo "$nombre"; ?></h1>
                <h2>Nombre de la Tienda: <?php echo "$tienda"; ?></h2>
                <h3>Productos de la Tienda</h3>
                <br>
            </div>
            <table class="table table-striped" name="tabla" border="1">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <?php while ($row2 = mysqli_fetch_array($res2)) {
                    if ($row2) {

                        ?>
                        <tr>
                            <td><?php echo $row2['codigo']; ?></td>
                            <td><?php echo $row2['nombre']; ?></td>
                            <td><?php echo $row2['tipo']; ?></td>
                            <td><?php echo $row2['cantidad']; ?></td>
                            <td><?php echo $row2['precio']; ?></td>

                        </tr>
                    <?php }
            } ?>
            </table>
            <?php if (isset($error_message)) { ?>
                <div><strong><?php echo $error_message; ?></strong></div>
            <?php } ?>

        </center>
        <a href="nuevo_producto.php">Registar un nuevo Producto</a>
        <a href="salir.php">Salir</a>
    </body>

    </html>

<?php
} else {
    header('Location: ../index.php');
}
