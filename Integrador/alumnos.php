<?php
require_once('parametros.php');
require_once('funciones.php');
require_once('conectar.php');

// Guardar en una variable la conexión con MySQL llamando a la función que está en funciones.php
$link = $conn;
$order = (!empty($_GET['order'])) ? $_GET['order'] : 'id';
$sql = 'SELECT * FROM alumno ORDER BY ' . $order;
$rs = mysqli_query($link, $sql);
$cantalumnos = mysqli_num_rows($rs);

// Cierra la conexión después de haber utilizado los resultados de la consulta
mysqli_close($link);

if ($cantalumnos > 0) {
    include 'mostrara.php';
} else {
    echo "No se encontraron alumnos.";
}
?>
