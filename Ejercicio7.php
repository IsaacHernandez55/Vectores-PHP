<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ejercicio 7</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  </head>
  <body>
    <div class="container">

      <h2>Teorema de Pitagoras</h2>

      <form method="post">
        Ingrese primer numero: <br><input type="text" name="numero1" value=""><br>
        Ingrese segundo numero: <br><input type="text" name="numero2" value=""><br>
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

      $pitagoras = sqrt(($datos[0]**2)+($datos[1]**2));

      echo "<h4>El teorema de pitagora de los numeros ingresados es : $pitagoras</h4>";

       ?>

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
