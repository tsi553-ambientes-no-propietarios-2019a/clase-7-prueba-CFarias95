<?php
session_start();
if (isset($_SESSION['user'])) {
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Registro Producto</title>
    </head>

    <body>
        <center>
            <div>
                <h1>Registro de un Producto</h1>
                <br>
                <form action='guardar_producto.php' method='POST'>
                    <div>
                        <input type="text" name="codigo" placeholder="Codigo" required>
                        <br><br>
                        <input type="text" name="nombre" placeholder="Nombre" required>
                        <br><br>
                        <label>Tipo:
                            <select name="tipo" required>
                                
                                <option value="Alimento">Alimento</option>
                                <option value="Vestiment">Vestimenta</option>
                                <option value="Salud">Salud</option>
                            </select>
                        </label>
                        <br><br>
                        <input type="numeric" name="cantidad" placeholder="Cantidad" required>
                        <br><br>
                        <input type="float" name="precio" placeholder="Precio" required>
                        <br><br>
                        <button type="submit">Registrar</button>
                    </div>
                </form>
            </div>
        </center>
    </body>

    </html>
<?php
} else {
    header('Location: ../index.php');
}
