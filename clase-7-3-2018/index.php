<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
  </head>
  <body>
    <h1>Práctica de PHP</h1>
    <p>En este sitio Web, practicaré mi código de HTML y PHP.</p>
    <?php
    echo "<p>Cualquier texto.</p>";
    //echo "<br>";
    echo "<p>", 123, "</p>";
    $guachupita = "<p>Esto es lo <b>mejor</b> que me ha pasado. :)</p>";
    echo $guachupita;
    $num = 789456123;
    echo $num;
    ?>
    <br><hr><br>
    <h1>Leyendo texto</h1>
    <p>Debajo de esta línea aparecerá el texto que esta escrito en un archivo guardado dentro de la carpeta del sitio Web.</p>
    <?php
    echo "<p>", readfile("texto.txt"), "</p>";
     ?>
     <hr><br>
     <form class="" action="index.php" method="get">
       <label>Edad</label> <input type="text" name="Edad" value="">
       <br>
       <input type="submit" name="" value="Someter">
     </form>
     <br><hr><br>
     <?php
       echo "Tu edad es ", $_GET["Edad"];
       $edad = $_GET["Edad"];
       if ($edad > 18) {
         $v = true;
      }
        echo "<br";
        echo $v;

      ?>
  </body>
</html>
