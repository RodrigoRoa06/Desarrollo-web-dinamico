<?php
require_once ('parametros.php');
require_once ('funciones.php');
require_once ('conectar.php');
//require_once 'encabezado.php';
/*
Guardar en una variable la conexion con mysql llamar a la funcion que esta en funciones.php
*/
$link=$conn;
$order=(!empty($_GET['order']))?$_GET['order']:'id';
$sql='SELECT * FROM curso ORDER BY '.$order;
$rs=mysqli_query($link,$sql);
mysqli_close($link);
$cantalumnos=mysqli_num_rows($rs);
if($cantalumnos>0){
    include 'mostrarc.php';
}else{
    echo "no se encontraron cursos.";
}