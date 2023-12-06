<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tp5.css">
    <title>Document</title>
</head>
<body>
    <h1>Simulador de aptitud para compra o alquiler de viviendas</h1>
    <form method="post">
        <input type="text" name="nom" id="nombre">
        <label for="nombre">Nombre del cliente</label>
        <h2>Tipo de transaccion</h2>
        <input type="radio" name="tt" id="tipot" value="venta">
        <label for="tipot">venta</label>
        <input type="radio" name="tt" id="tipot" value="alquiler">
        <label for="tipot">alquiler</label>
        <h2>Tipo de propiedad</h2>
        <select name="tp" id="tipop">
            <option value="casa">Casa</option>
            <option value="departamento">Departamento</option>
            <option value="duplex">Duplex</option>
        </select>
        <h2>Cantidad de habitaciones</h2>
        <select name="habi">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <h2>Sueldo actual del cliente que desea realizar la transaccion</h2>
        <input type="text" name="suel">
        <input type="submit" name="enviar" value="calcular">
    </form>
    <?php
include('enviar.php');
?>
</body>
</html>
