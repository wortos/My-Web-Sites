<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Procesamiento</title>
  </head>
  <body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gungulen";
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

$sql = "SELECT * FROM TABLE1 WHERE MUNICIPALITY = '$MUN' AND WARDNAME LIKE '%$WARD%' AND STREET LIKE '%$STREET%' AND BLOCK LIKE '%$BLO%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border=1 id='table'><tr><th>Municipio</th></th><th>Urb./Condo./Edif.</th><th>Calle</th><th>Bloque</th><th>Precio de Venta</th><th>Área del lote</th><th>Área vivienda</th><th>Garaje</th><th>Terraza</th><th>Área familiar</th><th>Lavandería</th><th>Piscina</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["MUNICIPALITY"]. "</td><td>" . $row["WARDNAME"]. "</td><td>" . $row["STREET"]. "</td><td>" .$row["BLOCK"]. "</td><td salesprice=".$row["SALEPRICE"].">" .$row["SALEPRICE"]. "</td><td>" .  $row["LOTAREA"]. "</td><td>" . $row["HOUSEAREA"] . "</td><td>" . $row["CARPORT"] . "</td><td>" . $row["TERRACE"] . "</td><td>" . $row["FAMILY"] . "</td><td>" . $row["LAUNDRY"] . "</td><td>" . $row["SWIMMING"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "NO SE OBTUVIERON RESULTADOS";
}
$conn->close();

    ?>
    
    <!--Bellow is the form used to get a more accurate sales price by asking the user the characteristics of the property they want to sell-->
    <table>
      <form>
        <p>Please indicate if your property has any of the following:</p>
        <tr>
          <td><label>Carport</label></td>
          <td><select class="" name="" id='selectCarport'>
            <option value=""></option>
            <option value="1cp1dw">1cp1dw</option>
            <option value="1cp2dw">1cp2dw</option>
            <option value="1gr1w">1gr1w</option>
            <option value="1PK">1PK</option>
            <option value="2cp1dw">2cp1dw</option>
            <option value="2cp2dw">2cp2dw</option>
            <option value="2gr1dw">2gr1dw</option>
            <option value="2gr2dw">2gr2dw</option>
            <option value="2pk">2pk</option>
            <option value="3cp1dw">3cp1dw</option>
            <option value="3cp3dw">3cp3dw</option>
            <option value="3gr2dw">3gr2dw</option>
            <option value="3pk">3pk</option>
            <option value="4cp2dw">4cp2dw</option>
            <option value="5gr2dw">5gr2dw</option>
          </select> </td>
        </tr>
        <tr>
          <td><label for="">Terrace</label> </td>
          <td><select class="" name="" id="selectTerrace">
            <option value=""></option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select> </td>
        </tr>
        <tr>
          <td><label for="">Family</label> </td>
          <td><select class="" name="" id="selectFamily">
            <option value=""></option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select> </td>
        </tr>
        <tr>
          <td><label for="">Laundry</label> </td>
          <td><select class="" name="" id="selectLaundry">
            <option value=""></option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select> </td>
        </tr>
        <tr>
          <td><label for="">Swimming pool</label> </td>
          <td><select class="" name="" id="selectSwimmingPool">
            <option value=""></option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select> </td>
        </tr>
      </form>
      <p><button type="button" name="button" onclick="evaluateData();">Submit</button> </p>
    </table>

    <p id="rowsC"></p>
    <p id="sumV"></p>
    <p id="val"></p>
    <!--Bellow is the script used to get the average sales price of the residences-->
    <script>
      var table = document.getElementById('table'), avgVal, sumVal = 0, rowCount = table.rows.length -1;
      for(var i = 1; i < table.rows.length; i++)
      {
          sumVal = sumVal + parseInt(table.rows[i].cells[4].innerHTML.replace(/,/g, ''));
          
      }
      setFooterData(sumVal,rowCount);
      



      var obj = {};
      obj.Pool = 12000;
      obj.Laundry = 1000;
      obj.Terrace = 5000;
      obj.Family  = 5000;


      var carportObj = {};
      carportObj['1cp1dw'] =	 5000.00; 
      carportObj['1cp2dw']	 =5000.00; 
      carportObj['1gr1w']	 =5000.00; 
      carportObj['1PK']	 =5000.00; 
      carportObj['2cp1dw']	 =7500.00; 
      carportObj['2cp2dw']	 =10000.00; 
      carportObj['2gr1dw']	 =7500.00; 
      carportObj['2gr2dw']	 =10000.00; 
      carportObj['2pk']	 =8000.00; 
      carportObj['3cp1dw']	 =9000.00; 
      carportObj['3cp3dw']	 =9000.00; 
      carportObj['3gr2dw']	 =9000.00; 
      carportObj['3pk']	 =10000.00; 
      carportObj['4cp2dw']	 =12000.00; 
      carportObj['5gr2dw']	 =15000.00; 

      function evaluateData(){
       
        var rowCount = table.rows.length -1;
        var grandTotal = 0;

        var selectSwimmingPoolValue = getSelectionValue('selectSwimmingPool');
        var selectLaundryValue = getSelectionValue('selectLaundry');
        var selectTerraceValue = getSelectionValue('selectTerrace');
        var selectFamilyValue = getSelectionValue('selectFamily');
        var carportValue = document.getElementById("selectCarport").value;
        for(var i = 1; i < table.rows.length; i++)
        {
          let total = 0;
          total = getAmmount(i,11,total,obj['Pool'],selectSwimmingPoolValue);
          total = getAmmount(i,10,total,obj['Laundry'],selectLaundryValue);
          total = getAmmount(i,8,total,obj['Terrace'],selectTerraceValue);
          total = getAmmount(i,9,total,obj['Family'], selectFamilyValue)          
          total = getCarportAmmount(i,7,total,carportValue);
          var rowTotal = setSalesValue(i, total);
          grandTotal += rowTotal;

        }        
        setFooterData(grandTotal, rowCount);
        
      }
      function getSelectionValue(elementId){
        let value = document.getElementById(elementId).value.toLowerCase();
        if(value === 'yes'){
          return 1;
        }else if (value === 'no'){
          return 0
        }
        return -1;
      }

      function getAmmount(i, cellNumber, total, ammountToAdd, valueSelection){            
        var retValue = total;
        var requireUpdate = table.rows[i].cells[cellNumber].innerText.toLowerCase() == 'no'? true : false;
        if(valueSelection === 1 && requireUpdate){
          retValue = total +  ammountToAdd;
        }else if (valueSelection === 0 && !requireUpdate){
          retValue = total -  ammountToAdd;
        }        
        return retValue;
      }
      function getCarportAmmount(i, cellNumber, total, carportValue) {  
        var retValue = total;
        if(carportValue !== '') {   
          var requireUpdate = table.rows[i].cells[cellNumber].innerText == carportValue? true : false;
          if(requireUpdate) { 
            retValue = total +  carportObj[carportValue];             
          }
        }
        return retValue;
      }
     
      function setSalesValue(i, valueToAdd) {                  
        var tot = parseInt(table.rows[i].cells[4].getAttribute('salesprice').replace(/,/g, '')) + valueToAdd;
        table.rows[i].cells[4].innerHTML = numberWithCommas(tot);
        return tot;
      }
      function numberWithCommas(x) {
          return x.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      }

      function setFooterData(sumVal, rowCount){
        document.getElementById("sumV").innerHTML = "Sum: " + numberWithCommas(sumVal);
        document.getElementById("rowsC").innerHTML = "Rows: " + numberWithCommas(rowCount);
        document.getElementById("val").innerHTML = "Valor promedio de venta: " + numberWithCommas(parseInt(sumVal / rowCount));
      }
 
    </script>


   </body>
</html>
