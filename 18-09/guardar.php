<?php
include('conectar.php');
if(isset($_POST['enviaral'])){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $division_a=$_POST['division_a'];
    $año_a=$_POST['año_a'];
    $busc="select curso.id from curso where curso.anio=$año_a and curso.division=$division_a";
    $res1=mysqli_query($conn,$busc);
    $sql="insert into alumno(nombre,apellido,id_c) values('$nombre','$apellido', " . mysqli_fetch_assoc($res1)['id'].")";
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