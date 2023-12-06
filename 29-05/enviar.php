<?php
include('conectar.php');
if(isset($_POST['enviar'])){
    $nombre=$_POST['nom'];
    $tipot=$_POST['tt'];
    $tipop=$_POST['tp'];
    $habi=$_POST['habi'];
    $suel=$_POST['suel'];
    $sql="insert into formtp4(nombre,tipot,tipop,habit,sueldo)values('$nombre','$tipot','$tipop','$habi','$suel')";
    $res=mysqli_query($conn,$sql);
}
$conn->close();
?>