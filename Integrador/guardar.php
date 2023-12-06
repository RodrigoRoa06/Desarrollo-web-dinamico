<?php
include('conectar.php');
if(isset($_POST['botona'])){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $dni=$_POST['Dni'];
    $libro=$_POST['libro'];
    $folio=$_POST['folio'];
    $año_a=$_POST['año_a'];
    $division_a=$_POST['division_a'];
    $busc="select curso.id from curso where curso.anio=$año_a and curso.division=$division_a";
    $res1=mysqli_query($conn,$busc);
    $sql="insert into alumno(nombre,apellido,Dni,libro,folio,id_c) values('$nombre','$apellido', '$dni','$libro','$folio'," . mysqli_fetch_assoc($res1)['id'].")";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        ?>
        <h3>ENVIADO</h3>
        <?php
    } else {
        ?>
        <h3>NO SE ENVIO</h3>
        <?php
        // Agrega un mensaje de error para depuración
        echo "Error: " . mysqli_error($conn);
    }
}
$conn->close();
header('location:formulario.html');

?>