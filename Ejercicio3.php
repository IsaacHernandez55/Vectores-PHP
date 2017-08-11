<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ejercicio 3</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  </head>
  <body>
    <div class="container">

      <h2>Area y Perimetro de un rombo</h2>

      <form method="post">
        Ingrese Diagonal 1: <br><input type="text" name="D" value=""><br>
        Ingrese Diagonal 2: <br><input type="text" name="d" value=""><br>
        Ingrese Lado: <br><input type="text" name="L" value=""><br>
        <br>
        <input class="btn btn-target" type="submit" name="enviar" value="Calcular">
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>
        <hr>
        <h1>Resultados</h1>
        <br>

      </form>

      <?php

      $datos[] = $_POST['D'];
      $datos[] = $_POST['d'];
      $datos[] = $_POST['L'];

      $A = ($datos[0]+$datos[1])/2;
      $P = 4 * $datos[2];

      echo "<h4>El area del rombo es: $A</h4>";
      echo "<br>";
      echo "<h4>El perimetro del rombo es: $P</h4>";

       ?>

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
