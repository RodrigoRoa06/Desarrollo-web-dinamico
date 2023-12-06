<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <a href="formulario.html" class="btn btn-primary mb-3">
        <span>&larr;</span> Volver al inicio
    </a>

    <table class="table table-bordered table-striped">
    <div class = "container">
    <h1 class="text-center"> Tecnica 6</h1>    <br><br>
    <div class = "row text-center">
       <div class = "col"><input type="button" class="btn btn-primary" value="Alumnos"  onclick="encontrar(1);">
       <input type="button" class="btn btn-primary" value="Alumnos De Sexto Septima"  onclick="encontrar(2);">
       <input type="text" id="busque" class="form-control form-control-plaintext" placeholder="nombre" onkeypress="busqueda();">
    </div>
    </div>
    <hr>
        <h5 class="text-center"> Lista detalle</h5>
        <div class = "row justify-content-md-center">
            <div class="col-md-8">
            <div id="mostrar"></div>
            
                 
        </div>
</div>
        <thead class="table-dark">
            <tr>
                <th><a href="datos.php?order=id" class="text-white">ID estudiante</a></th>
                <th><a href="datos.php?order=id_c" class="text-white">ID curso</a></th>
                <th><a href="datos.php?order=Dni" class="text-white">DNI</a></th>
                <th><a href="datos.php?order=nombre" class="text-white">Nombre</a></th>
                <th><a href="datos.php?order=apellido" class="text-white">Apellido</a></th>
                <th><a href="datos.php?order=folio" class="text-white">Folio</a></th>
                <th><a href="datos.php?order=libro" class="text-white">Libro</a></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($unalumno = mysqli_fetch_assoc($rs)): ?>
                <tr>
                    <td><?= $unalumno['id'] ?></td>
                    <td><?= $unalumno['id_c'] ?></td>
                    <td><?= $unalumno['Dni'] ?></td>
                    <td><?= $unalumno['nombre'] ?></td>
                    <td><?= $unalumno['apellido'] ?></td>
                    <td><?= $unalumno['folio'] ?></td>
                    <td><?= $unalumno['libro'] ?></td>
                </tr>
            <?php endwhile; ?>
            <tr>
                <td colspan="7" class="text-center">
                    Se encontraron <?php echo $cantalumnos; ?> alumnos.
                </td>
            </tr>
        </tbody>
    </table>
</div>
        <script>
function encontrar(boton) {
    var accion = boton;
    var parametros = {
        "accion": accion
    };
    $.ajax({
        data: parametros,
        url: 'codigophp.php',
        type: 'POST',
        success: function(mensaje_mostrar) {
            $('#mostrar').html(mensaje_mostrar);
        }
    });
}

function busqueda() {
    var busca = document.getElementById('busque').value;
    var parametros = {
        "mi_busqueda": busca,
        "accion": "3"
    };

    $.ajax({
        data: parametros,
        url: 'codigophp.php',
        type: 'POST',
        success: function(mensaje_mostrar) {
            $('#mostrar').html(mensaje_mostrar);
        }
    });
}
</script>

</body>
</html>