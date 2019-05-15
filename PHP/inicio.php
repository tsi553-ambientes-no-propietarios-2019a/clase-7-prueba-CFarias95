<?php
if(isset($_SESSION['user'])){
    $nombre=$_SESSION['user'];
    $con=mysqli_connect("localhost","root","","pruebab1");
    $sql="SELECT Nombretienda FROM tienda WHERE usuario='$nombre'";
    $res=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($res)){
        $tienda=$row['Nombretienda'];
    }   

?>
<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
</head>
<body>
    <center>
        <div>
            <h1>Bienvenido <?php echo"$nombre";?></h1>
            <h2>Nombre de la Tienda: <?php echo"$tienda";?></h2>
            <h3>Productos de la Tienda</h3>
            <br>
        </div>
    </center>
</body>
</html>

<?php
}else{
    header('Location: ../index.php');
}