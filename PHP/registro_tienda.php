<?php
if ($_GET) {
    if (isset($_GET['error_message'])) {
        $error_message = $_GET['error_message'];
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registro tienda</title>
</head>

<body>
    <center>
        <div>
            <h1>Registro de Tienda</h1>
            <br>
            <form action='registrar_tienda.php' method='POST'>
                <div>
                    <input type="text" name="nombretienda" placeholder="Nombre de la tienda" required>
                    <br><br>
                    <input type="text" name="usuario" placeholder="usuario" required>
                    <br><br>
                    <input type="password" name="clave" placeholder="clave" required>
                    <br><br>
                    <input type="password" name="clave1" placeholder="confirmar clave" required>
                    <br><br>
                    <button type="submit">Registrar</button>
                </div>
            </form>
        </div>
        <?php if (isset($error_message)) { ?>
            <div><strong><?php echo $error_message; ?></strong></div>
        <?php } ?>
    </center>
</body>
</html>