<?php
include ('conectar.php');

echo '<table class="table table-hover">
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>curso</th>
        </tr>';

$result = mysqli_query($conn, "SELECT alumno.id, alumno.nombre, alumno.apellido, curso.año, curso.division 
                                FROM alumno 
                                INNER JOIN curso ON alumno.id_c = curso.id");

while ($consulta = mysqli_fetch_array($result)) {
    echo '<tr>
            <td>' . $consulta['id'] . '</td>
            <td>' . $consulta['nombre'] . '</td>
            <td>' . $consulta['apellido'] . '</td> 
            <td>' . $consulta['año'] . $consulta['division'] . '</td>
          </tr>';
}

echo '</table>';
?>
