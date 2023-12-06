<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <div class="estilo_caja">
            <p class="estilo_titulo">INGRESA TUS DATOS<p>
    <form method="post">
            <table>
                <tr>
                    <td> 
                    <label class="s"for="nombre">Nombre:</label>
                </td>
                <td>
                    <input type="text" id="nombre" name="nombre">
                </td>   
            </tr>
            <tr>
                 <td>
                    <label class="s"for="apellidom">Apellido Materno:</label>
                </td>
                <td>
                    <input type="text" id="apellidom" name="apellidom">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="s"for="apellidop">apellido Paterno:</label>
                </td>
                <td>
                    <input type="text" id="apellidop" name="apellidop">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="s"for="ciudadn">Ciudad natal:</label>
                    </td>
                    <td>
                    <input type="text" id="ciudadn" name="ciudadn">
                </td>
            </tr>
        </table>
        <input id="boton"type="submit" name="guardar" value="Enviar">
       </form>   
    </div>
    </center>
    <?php
include('guardar.php');
?> 
</body>
</html>