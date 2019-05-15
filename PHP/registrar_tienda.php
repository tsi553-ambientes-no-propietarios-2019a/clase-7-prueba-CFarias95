<?php
session_start();
if($_POST['nombretienda'] and $_POST['usuario'] and _POST['clave']){
    $clave1=$_POST['clave'];
    $clave2=$_POST['clave1'];
    if($clave1 != $clave2){
        header('Location: registro_tienda.php?Las Claves no coinciden');
    }else{
        $tienda=$_POST['nombretienda'];
        $usu=$_POST['usuario'];
        $con=mysqli_connect("localhost","root","","pruebab1");
        $sql="INSERT INTO tienda(Nombretienda, usuario, clave) VALUES ('$tienda','$usu','$clave1')";
        $res=mysqli_query($con,$sql);
        if($res){
            header('Location: ../index.php?Tienda registrada correctamente, puede iniciar sesión');
        }else{
            header('Location: registro_tienda.php?no se pudo registrar la tienda');
        }
    }
}else{
    header('Location: ../index.php');
}