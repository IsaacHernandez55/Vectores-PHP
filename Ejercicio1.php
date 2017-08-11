<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ejercicio 1</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  </head>
  <body>
    <div class="container">

      <h2>Pago neto de un Trabajador</h2>
      <form method="post">
        Ingrese horas Trabajadas: <br><input name="ht"  type="text" /></br>
        Ingrese tarifa de Horas: <br><input name="th"  type="text" /></br>
        Ingrese tasa de impuesto: <br><input name="ti"  type="text"/></br>
        <br>
        <input class="btn btn-target" name="enviar" type="submit" value="Calcular"/>
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>
        <hr>
        <h1>Resultados</h1>
        <br>

      </form>

      <?php

      $datos[] = $_POST['ht'];
      $datos[] = $_POST['th'];
      $datos[] = $_POST['ti'];

      $pn = ($datos[0]*$datos[1]-$datos[2]);

       ?>

       <h4>Horas Trabajadas: <?php echo $datos[0] ?></h4>
       <h4>Tarifa Por Horas: <?php echo $datos[1] ?></h4>
       <h4>Tasa de Impuesto: <?php echo $datos[2] ?></h4>

       <?php

       if ($pn<0) {
         echo "<h4>Usted quedo debiendo para el proximo pago: $pn</h4>";
       }
       else {
         echo "<h4>El pago neto es de: $pn</h4>";
       }

        ?>

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
