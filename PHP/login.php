<?php
session_start();
if(isset($_POST['usuraio'])  and isset($_POST['contraseña'])){
    $con=mysqli_connect("localhost","root","","pruebab1");
    $usuario=$_POST['usuraio'];
    $contraseña=$_POST['contraseña'];
    $sql="SELECT usuario, clave FROM tienda";
    $res=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($res)){
        if($row['usuario']=="$usuario" and $row['clave']=="$contraseña"){
            $_SESSION['user']="$usuario";
            header('Location: inicio.php');
        }else{
            header('Location: ../index.php?error_message=usuario o clave incorrectos');
        }
    }
   
}else{
    header('Location: ../index.php');
}