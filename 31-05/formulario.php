<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <h1>Prueba</h1>
<form method="post">
    <h2>Datos del alumno</h2>
    <label for="fecha">Ingrese la fecha:</label>
    <input type="date" name="fecha" id="fecha"><br>
    <label for="correo">Ingrese su correo:</label>
    <input type="email" name="correo" id="correo"><br>
    <label for="nombre">Ingrese su nombre:</label>
    <input type="text" name="nombre" id="nombre"><br>
    <label for="apellido">Ingrese su apellido:</label>
    <input type="text" name="apellido" id="apellido"><br>
    <h2>Cuestionario</h2>
    <h3>¿Cual es la capital de Buenos Aires?</h3>
    <input id="obelisco" name="p1" type="radio" value="obelisco">
    <label for="obelisco">El Obelisco</label><br>
    <input id="laplata" name="p1" type="radio" value="laplata">
    <label for="laplata">La Plata</label><br>
    <input id="9julio" name="p1" type="radio" value="9julio">
    <label for="9julio">La avenida 9 de Julio</label><br>
    <h3>¿Cuantas provincias tiene argentina?</h3>
    <select name="p2" id="p2">
        <option value="24">24</option>
        <option value="23">23</option>
        <option value="22">22 más la capital</option>
    </select>
    <h3>¿De que color era el caballo blanco de san martin?</h3>
    <input type="color" name="p3">
    <input type="submit" value="guardar" name="guardar">
</form>
<?php
include('guardar.php');
?>
</body>
</html>
<!-- id int
fecha date
correo string
nombre string
apellido string
p1 string
p2 string 
p3 string -->
