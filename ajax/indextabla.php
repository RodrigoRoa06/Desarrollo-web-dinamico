<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
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


 </script>
</body>
</html>




