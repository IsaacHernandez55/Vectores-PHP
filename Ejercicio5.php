<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ejercicio 5</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  </head>
  <body>
    <div class="container">

      <h2>Convertidor de Millas a kilometros</h2>

      <form method="post">
        Ingrese Millas: <input type="text" name="milla" value=""><br><br>
        <input class="btn btn-target" type="submit" name="enviar" value="Calcular">
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>
        <hr>
        <h1>Resultados</h1>
        <br>

      </form>

      <?php

      $datos[] = $_POST['milla'];
      $datos[] = "1.609344";

      $km = ($datos[0] * $datos[1]);

      echo "<h4>$datos[0] millas equivalen a $km kilometros</h4>";

       ?>

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
