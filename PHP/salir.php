<?php
session_start();
if(isset($_SESSION['user'])){
    session_destroy();
    header('Location: ../index.php?error_message=ha cerrado sesion corectamente');
    exit();

}