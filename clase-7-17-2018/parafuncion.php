<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Funciones - Resultado</title>
  </head>
  <?php
    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    function nuco($num1,$num2){
      echo $num1 + $num2, "<br>";
      echo $num1 * $num2;
    }
   ?>
  <body>
    <h1>Menú</h1>
    | <a href="index.php">Inicio</a>
    | <a href="formulario.php">Formularios</a>
    | <a href="array.php">Arrays</a>
    | <a href="funcion.php">Funciones</a>
    |
    <br><hr><br>
    <h2>Debajo de esta línea encontrará la suma utilizando una función</h2>
    <?php nuco($num1,$num2) ?>
<br><hr><br>
    <footer>
      <br><hr><br>
      <p>Creado por Prof. Ismael González</p>
    </footer>
  </body>
</html>
