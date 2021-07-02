<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularios - Resultado</title>
  </head>
  <body>
    <h1>Menú</h1>
    | <a href="index.php">Inicio</a>
    | <a href="formulario.php">Formularios</a>
    | <a href="array.php">Arrays</a>
    | <a href="funcion.php">Funciones</a>
    |
    <br><hr><br>
    <p>El nombre que escribió en el encasillado es: </p>
    <?php
    $name = $_POST["nombre"];
    $lastName = $_POST["apellido"];
    echo $name . " " . $lastName;
     ?>

    <footer>
      <br><hr><br>
      <p>Creado por Prof. Ismael González</p>
    </footer>
  </body>
</html>
