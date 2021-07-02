<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Funciones</title>
  </head>
  <?php
    function guachupita() {
      echo "Buenas noches alumnos";
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
    <h2>Debajo de esta línea encontrará una función</h2>
    <?php guachupita() ?>
<br><hr><br>
<form class="" action="parafuncion.php" method="post">
  <label for="">Escribe el primer número: </label>
  <input type="number" name="numero1" value="">
  <br>
  <label for="">Escribe el segundo número: </label>
  <input type="number" name="numero2" value="">
  <br>
  <input type="submit" name="" value="Someter">
</form>
    <footer>
      <br><hr><br>
      <p>Creado por Prof. Ismael González</p>
    </footer>
  </body>
</html>
