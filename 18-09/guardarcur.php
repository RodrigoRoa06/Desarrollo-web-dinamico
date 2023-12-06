<?php
include('conectar.php');
if(isset($_POST['enviarcur'])){
    $año=$_POST['año'];
    $division=$_POST['division'];
    $id_espe=$_POST['id_espe'];
    $a="select especialidad.id from especialidad,curso where especialidad.nombre='$id_espe'";
    $resa=mysqli_query($conn,$a);
    $sql="insert into curso(anio,division,id_espe)values('$año','$division',".mysqli_fetch_assoc($resa)['id'].")";
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