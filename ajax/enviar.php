<?php
include('conectar.php');
if(isset($_POST['enviar'])){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $sql="INSERT INTO tabla(nombre,apellido) VALUES ('$nombre','$apellido')";
    $res=mysqli_query($conn,$sql);
if($res){
    ?>
    <h3>ENVIADO</h3>
        <?php
}else{
    ?>
    <h3>NO ENVIADO</h3>
    <?php
}
}
$conn->close();
?>
