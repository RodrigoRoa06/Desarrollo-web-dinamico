<?php
include('conectar.php');
if(isset($_POST['enviar'])){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $sql="insert into formulario(nombre,apellido)values('$nombre','$apellido')";
    $res=mysqli_query($conn,$sql);
    if($res){
        ?>
        <h3>NO SE ENVIO</h3>
        <?php
    }else{
    ?>
    <h3>ENVIADO</h3>
    <?php
    }
}
$conn->close();
header('location:index.html');
?>