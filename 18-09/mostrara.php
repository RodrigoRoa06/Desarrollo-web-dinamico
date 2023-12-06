<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <a href="formulario.html"><span>&larr;</span>Volver al inicio</a>
        	<table bgcolor="white" border="20px" align="center" width="80%" style="height: 80%;">
            <tr>
                <th><a href="datos.php?order=id">ID estudiante</a></th>
                <th><a href="datos.php?order=id_c">ID curso</a></th>
                <th><a href="datos.php?order=nombre">Nombre</a></th>
                <th><a href="datos.php?order=apellido">apellido</a></th>
            </tr>
             <?php while($unalumno=mysqli_fetch_assoc($rs)):?>
            <tr>
                <th> <?=$unalumno['id']?> </th>
                <th> <?=$unalumno['id_c']?> </th>
                <th> <?=$unalumno['apellido']?> </th>
                <th> <?=$unalumno['nombre']?> </th>
            </tr>
            <?php endwhile;?>
            <tr>
                <td colspan="11" align="center">
                    se encontraron <?php echo $cantalumnos;?>

                </td>
            </tr>
    
</body>
</html>