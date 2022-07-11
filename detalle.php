<?php require "consultas/uno.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ejemplo de uso de Javascript y FastAPI">
    <meta name="theme-color" content="#317EFB" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>SQLite3</title>
    </script>
</head>

<body>
    <div class="container">
<h1>Detalle Cliente</h1>

        <button onclick="history.back()" class='btn btn-primary'>Regresar</button>

        <form name="cliente">
            <div class="mb-3">
                <label for="id_cliente" class="form-label">ID</label>
                <input type="text" class="form-control" id="id_cliente" name="id_cliente" readonly value="<?php echo $cliente['id_cliente']?>">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" readonly value="<?php echo $cliente['nombre']?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" readonly value="<?php echo $cliente['email']?>">
            </div>
        </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    </div>
</body>
</html>