<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ejercicio 2</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  </head>
  <body>
    <div class="container">

      <h2>Promedio de un estudiante</h2>

      <form method="post">
        Ingrese nota 1: <br><input name="N1"  type="text" /></br>
        Ingrese nota 2: <br><input name="N2"  type="text" /></br>
        Ingrese nota 3: <br><input name="N3"  type="text"/></br>
        <br>
        <input class="btn btn-target" name="enviar" type="submit" value="Calcular"/>
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>
        <hr>
        <h1>Resultados</h1>
        <br>

      </form>

      <?php

      $datos[] = $_POST['N1'];
      $datos[] = $_POST['N2'];
      $datos[] = $_POST['N3'];
      $promedio=($datos[0]+$datos[1]+$datos[2])/3;

      echo "<h4>El promedio es: $promedio</h4>";

       ?>

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
