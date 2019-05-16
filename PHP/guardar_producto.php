<?php
session_start();
if (isset($_SESSION['user'])) {
    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];
    $tipo=$_POST['tipo'];
    $tienda=$_SESSION['user'];

    $con = mysqli_connect("localhost", "root", "", "pruebab1");
    $sql = "INSERT INTO productos(codigo, nombre, tipo, precio, cantidad, tienda) VALUES('$codigo','$nombre','$tipo','$precio','$cantidad','$tienda')";
    $res=mysqli_query($con,$sql);
    if($res){
        header('Location: inicio.php?error_message=producto registrado exitosamente');
    }
}else{
    header('Location: ../index.php');
}