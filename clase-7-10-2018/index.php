<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
  </head>
  <body>
    <h1>Bienvenidos a mi sitio Web</h1>
<?php $ig="Prof. Ismael González" ?>
    <p>Me llamo <?php echo $ig; ?> y espero ayudarles a aprender el lenguaje de programación PHP.</p>
<?php
    $ventasQ1=123;
    $ventasQ2=456;
 ?>
    <p>Las ventas de los dos primeros trimestres del año fueron $<?php echo $ventasQ1 ** $ventasQ2 ?>.</p>

<br><hr><br>
<?php
  //Esto es un comentario de una línea
  /*Esto es un ejemplo de un
  comentario multilínea*/
  $a = 21;
  $b = "21";
  if ($a != $b) {
    echo "<p>La condición es cierta.</p>";
  } else {
    echo "<p>La condición es falsa.</p>";
  }
phpinfo();
 ?>
  </body>
</html>
