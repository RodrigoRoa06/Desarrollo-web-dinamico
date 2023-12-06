<?php
include ('conectar.php');
echo
'<table class="table table-hover">
<tr>
    <th>id</th>
    <th>nombre</th>
    <th>apellido</th>
    <th>curso</th>
</tr>';
$accion = $_POST['accion'];

if ($accion == 1) {
    $result = mysqli_query($conn, "SELECT * FROM alumno, curso where alumno.id_c=curso.id");
    while ($consulta = mysqli_fetch_array($result)) {
        echo
        '<tr>
          <td>' . $consulta['id'] . '</td>
          <td>' . $consulta['nombre'] . '</td>
          <td>' . $consulta['apellido'] . '</td> 
          <td>' . $consulta['año'] . $consulta['division'] . '</td>
        </tr>';
    }
}
if ($accion == 2) {
    $result = mysqli_query($conn, "SELECT alumno.id,alumno.nombre,alumno.apellido,curso.año,curso.division from alumno,curso where alumno.id_c=curso.id and (curso.año=6 and curso.division=7)");
    while ($consulta = mysqli_fetch_array($result)) {
        echo
        '<tr>
          <td>' . $consulta['id'] . '</td>
          <td>' . $consulta['nombre'] . '</td>
          <td>' . $consulta['apellido'] . '</td> 
          <td>' . $consulta['año'] . $consulta['division'] . '</td>
        </tr>';
    }
    echo '</table>';
}
if ($accion == 3){
    $mi_busqueda=$_POST['mi_busqueda'];
    $result=mysqli_query($conn,"select alumno.nombre,alumno.apellido,alumno.id,curso.año,curso.division from alumno,curso where nombre like '%$mi_busqueda%'and alumno.id_c=curso.id");
    while ($consulta = mysqli_fetch_array($result)) {
        echo
        '<tr>
          <td>' . $consulta['id'] . '</td>
          <td>' . $consulta['nombre'] . '</td>
          <td>' . $consulta['apellido'] . '</td> 
          <td>' . $consulta['año'] . $consulta['division'] . '</td>
        </tr>';
    }
    echo '</table>';
}
?>
