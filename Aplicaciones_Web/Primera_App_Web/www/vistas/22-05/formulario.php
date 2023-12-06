<?php
$nombre=$_POST['nombre'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$ciudadn=$_POST['ciudadn'];
//se conecta con la BDD
$host='localhost';
$user='root';
$bd='personas';
$pw='';
$conn=new mysqli($host,$user,$pw,$bd);
if($conn->connect_errno){
    echo"nuestro sitio experimenta fallos";
    exit();
}
$conn->query("insert into personas.usuario(id,nombre,apellidop,apellidom,ciudadn)values(NULL,'$nombre','$apellidop','$apellidom','$ciudadn')");
$conn->close();
header($location='formulario.html');
?>