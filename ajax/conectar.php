<?php
require_once("parametros.php");
$conn=new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
//mysqli_query($conn,'set name".DB_ENCODE"');
if(!$conn){
    die("conexion fallida:".mysqli_connect_error());
    exit();
}
$tabla1='alumno';
$tabla2='curso';
?>
