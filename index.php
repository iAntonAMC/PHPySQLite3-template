<?php require "consultas/todos_clientes.php"?>
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
    <script type="text/javascript" src="static/js/config.js">
    </script>
</head>

<body>
    <div class="container">
        <h1>Lista de Clientes </h1>
         <input type="button" class='btn btn-primary' onclick="window.location.replace('/insertar.php');"
                value="Insertar">
      <table class="table table-striped">
          <thead>
              <th>Detalle</th>
              <th>Actualizar</th>
              <th>Borrar</th>
              <th>ID</th>
              <th>Nombre</th>
              <th>Email</th>
          </thead>
          <tbody>
            <?php foreach ($clientes as $cliente) { 
              echo '<tr>';
                echo "<td><a href='detalle.php/?id_cliente=" . $cliente['id_cliente'] . "'>Detalle</td>";
                echo "<td><a href='actualizar.php/?id_cliente=" . $cliente['id_cliente'] . "'>Actualizar</td>";
                echo "<td><a href='borrar.php/?id_cliente=" . $cliente['id_cliente'] . "'>Borrar</td>";
                echo '<td>' . $cliente['id_cliente'] . '</td>';
                echo '<td>' . $cliente['nombre'] . '</td>';
                echo '<td>' . $cliente['email'] . '</td>';
              echo '</tr>';
            } ?>
        </tbody>
    </table>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    </div>
</body>
</html>