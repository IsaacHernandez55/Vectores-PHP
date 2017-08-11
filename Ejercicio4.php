<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ejercicio 4</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  </head>
  <body>
    <div class="container">

      <h2>Operaciones</h2>

      <form method="post">
        Ingrese Numero 1: <br><input type="text" name="numero1" value=""><br>
        Ingrese Numero 2: <br><input type="text" name="numero2" value=""><br>
        <br>
        <input class="btn btn-target" type="submit" name="enviar" value="Calcular">
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>
        <hr>
        <h1>Resultados</h1>
        <br>

      </form>

      <?php

      $datos[] = $_POST['numero1'];
      $datos[] = $_POST['numero2'];

      $suma = $datos[0] + $datos[1];
      $resta = $datos[0] - $datos[1];
      $multiplicacion = $datos[0] * $datos[1];

      echo "<h4>La suma es: $suma</h4>";
      echo "</br>";
      echo "<h4>La resta es: $resta</h4>";
      echo "</br>";
      echo "<h4>La multiplicacion es: $multiplicacion</h4>";
      echo "<br>";

      if (($datos[0]!=0)&&($datos[1!=0])) {
        $division = $datos[0] / $datos[1];
        $modulo = $datos[0] % $datos[1];
        echo "<h4>La division es: $division</h4>";
        echo "</br>";
        echo "<h4>El modulo es: $modulo</h4>";
        echo "<br>";
      }
      else {
        echo "<h4>La division es: Indefinida</h4>";
        echo "<br>";
        echo "<h4>El modulo es: Indefinido</h4>";
      }


       ?>

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
