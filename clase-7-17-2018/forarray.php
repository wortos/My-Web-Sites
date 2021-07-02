<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Arrays - Resultado</title>
  </head>
  <body>
    <h1>Menú</h1>
    | <a href="index.php">Inicio</a>
    | <a href="formulario.php">Formularios</a>
    | <a href="array.php">Arrays</a>
    | <a href="funcion.php">Funciones</a>
    |
    <br><hr><br>
    <h1>Dato escogido</h1>
    <?php
      $granos = array("Arroz", "Gandúles", "Garbanzos");
      $num = $_POST["grano"] - 1;
      //echo $num;
      echo "<p>El grano escogido fue " . $granos[$num] . ".</p>";

     ?>
     <hr>
    <h2>Datos en el array</h2>
    <table border="1">
      <tr>
        <th>Índice</th>
        <th>Dato</th>
      </tr>
      <tr>
        <td>1</td><td>Arroz</td>
      </tr>
      <tr>
        <td>2</td><td>Gandúles</td>
      </tr>
      <tr>
        <td>3</td><td>Garbanzos</td>
      </tr>
    </table>

    <footer>
      <br><hr><br>
      <p>Creado por Prof. Ismael González</p>
    </footer>
  </body>
</html>
