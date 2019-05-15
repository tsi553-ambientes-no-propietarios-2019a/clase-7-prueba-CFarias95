<?php

?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <center>
        <div>
            <h1>Bienvenido/a</h1>
            <br>
            <form action='PHP/login.php' method ='POST'>
                <div>
                    <input type="text" name="usuraio" placeholder="usuario" required>
                    <br><br>
                    <input type="password" name="contraseña" placeholder="contraseña" required>
                    <br><br>
                    <button type="submit">Ingresar</button>

                    <a href='PHP/registro_tienda.php'>Registrar mi Tienda</a>
                </div>
            </form>
        </div>
    </center>
</body </html