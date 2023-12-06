<?php
include('conectar.php');
if(isset($_POST['guardar'])){
    $nombre=$_POST['nombre'];
    $apellidom=$_POST['apellidom'];
    $apellidop=$_POST['apellidop'];
    $ciudadn=$_POST['ciudadn'];
    $sql="insert into datos(nombre,apellidom,apellidop,ciudadn)values('$nombre','$apellidom','$apellidop','$ciudadn')";
    $res=mysqli_query($conn,$sql);
}
$conn->close();
?>
