<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Procesamiento</title>
  </head>
  <body>
    <?php
        $servername = "localhost";
        $username = "jpacheco_prueba";
        $password = "ZFkOlp6k~Z;Y";
        $dbname = "jpacheco_prueba";
        $MUN = $_POST["municipality"];
        $WARD = $_POST["wardname"];
        $STREET = $_POST["street"];
        $BLO = $_POST["block"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Los datos sometidos son: " . $MUN . " " . $WARD . " " .  $STREET . " " . $BLO . "<BR>";

$sql = "SELECT REFERENCE, MUNICIPALITY, WARDNAME, STREET, BLOCK, SALEPRICE FROM TABLE1 WHERE MUNICIPALITY = '$MUN' AND WARDNAME LIKE '%$WARD%' AND STREET LIKE '%$STREET%' AND BLOCK LIKE '%$BLO%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border=1 id='table'><tr><th>Referencia</th><th>Municipio</th></th><th>Urb./Condo./Edif.</th><th>Calle</th><th>Bloque</th><th>Precio de Venta</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["REFERENCE"]. "</td><td>" . $row["MUNICIPALITY"]. "</td><td>" . $row["WARDNAME"]. "</td><td>" . $row["STREET"]."</td><td>" . $row["BLOCK"]."</td><td>" . $row["SALEPRICE"]."</td></tr>";;
  }
  echo "</table>";
} else {
  echo "NO SE OBTUVIERON RESULTADOS";
}
$conn->close();

    ?>
    <p id="rowsC"></p>
    <p id="sumV"></p>
    <p id="val"></p>
    <script>
      var table = document.getElementById('table'), avgVal, sumVal = 0, rowCount = table.rows.length -1;
      for(var i = 1; i < table.rows.length; i++)
      {
          sumVal = sumVal + parseInt(table.rows[i].cells[5].innerHTML);
      }
      document.getElementById("sumV").innerHTML = "Sum: " + sumVal;
      document.getElementById("rowsC").innerHTML = "Rows: " + rowCount;
      document.getElementById("val").innerHTML = "Valor promedio de venta: " + parseInt(sumVal / rowCount);
    </script>


   </body>
</html>
