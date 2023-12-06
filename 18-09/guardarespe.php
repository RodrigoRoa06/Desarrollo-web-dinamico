<?php
include('conectar.php');
if(isset($_POST['enviarespe'])){
    $nombre=$_POST['nombre_espe'];
    $sql="insert into especialidad(nombre)values('$nombre')";
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
header('location:formulario.html');
?>