<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario de prueba</title>
  </head>
  <body>
    <h1>Favor de llenar cada encasillado con la información correspondiente</h1>
    <table>
      <form class="" action="proceso-prueba.php" method="post">
        <tr>
          <td><label for="block">Bloque</label> </td>
          <td><input type="text" name="block" value=""> </td>
        </tr>
        <tr>
          <td><label for="street">Calle</label> </td>
          <td><input type="text" name="street" value=""> </td>
        </tr>
        <tr>
          <td><label for="wardname">Urb./Condo./Edif.</label></td>
          <td>
            <input type="text" name="wardname" value="" required>
          </td>
        </tr>
        <tr>
          <td><label for="municipality">Municipio</label></td>
          <td><select class="" name="municipality" required>
            <option value=""  ></option>
            <option value="Adjuntas"  >Adjuntas</option>
            <option value="Aguada"  >Aguada</option>
            <option value="Aguadilla"  >Aguadilla</option>
            <option value="Aguas Buenas"  >Aguas Buenas</option>
            <option value="Aibonito"  >Aibonito</option>
            <option value="Añasco"  >Añasco</option>
            <option value="Arecibo"  >Arecibo</option>
            <option value="Arroyo"  >Arroyo</option>
            <option value="Barceloneta"  >Barceloneta</option>
            <option value="Barranquitas"  >Barranquitas</option>
            <option value="Bayamón"  >Bayamón</option>
            <option value="Cabo Rojo"  >Cabo Rojo</option>
            <option value="Caguas"  >Caguas</option>
            <option value="Camuy"  >Camuy</option>
            <option value="Canóvanas"  >Canóvanas</option>
            <option value="Carolina"  >Carolina</option>
            <option value="Cataño"  >Cataño</option>
            <option value="Cayey"  >Cayey</option>
            <option value="Ceiba"  >Ceiba</option>
            <option value="Ciales"  >Ciales</option>
            <option value="Cidra"  >Cidra</option>
            <option value="Coamo"  >Coamo</option>
            <option value="Comerío"  >Comerío</option>
            <option value="Corozal"  >Corozal</option>
            <option value="Culebra"  >Culebra</option>
            <option value="Dorado"  >Dorado</option>
            <option value="Fajardo"  >Fajardo</option>
            <option value="Florida"  >Florida</option>
            <option value="Guánica"  >Guánica</option>
            <option value="Guayama"  >Guayama</option>
            <option value="Guayanilla"  >Guayanilla</option>
            <option value="Guaynabo"  >Guaynabo</option>
            <option value="Gurabo"  >Gurabo</option>
            <option value="Hatillo"  >Hatillo</option>
            <option value="Hormigueros"  >Hormigueros</option>
            <option value="Humacao"  >Humacao</option>
            <option value="Isabela"  >Isabela</option>
            <option value="Jayuya"  >Jayuya</option>
            <option value="Juana Díaz"  >Juana Díaz</option>
            <option value="Juncos"  >Juncos</option>
            <option value="Lajas"  >Lajas</option>
            <option value="Lares"  >Lares</option>
            <option value="Las Marías"  >Las Marías</option>
            <option value="Las Piedras"  >Las Piedras</option>
            <option value="Loíza"  >Loíza</option>
            <option value="Luquillo"  >Luquillo</option>
            <option value="Manatí"  >Manatí</option>
            <option value="Maricao"  >Maricao</option>
            <option value="Maunabo"  >Maunabo</option>
            <option value="Mayagüez"  >Mayagüez</option>
            <option value="Moca"  >Moca</option>
            <option value="Morovis"  >Morovis</option>
            <option value="Naguabo"  >Naguabo</option>
            <option value="Naranjito"  >Naranjito</option>
            <option value="Orocovis"  >Orocovis</option>
            <option value="Patillas"  >Patillas</option>
            <option value="Peñuelas"  >Peñuelas</option>
            <option value="Ponce"  >Ponce</option>
            <option value="Quebradillas"  >Quebradillas</option>
            <option value="Rincón"  >Rincón</option>
            <option value="Río Grande"  >Río Grande</option>
            <option value="Sabana Grande"  >Sabana Grande</option>
            <option value="Salinas"  >Salinas</option>
            <option value="San Germán"  >San Germán</option>
            <option value="San Juan"  >San Juan</option>
            <option value="San Lorenzo"  >San Lorenzo</option>
            <option value="San Sebastián"  >San Sebastián</option>
            <option value="Santa Isabel"  >Santa Isabel</option>
            <option value="Toa Alta"  >Toa Alta</option>
            <option value="Toa Baja"  >Toa Baja</option>
            <option value="Trujillo Alto"  >Trujillo Alto</option>
            <option value="Utuado"  >Utuado</option>
            <option value="Vega Alta"  >Vega Alta</option>
            <option value="Vega Baja"  >Vega Baja</option>
            <option value="Vieques"  >Vieques</option>
            <option value="Villalba"  >Villalba</option>
            <option value="Yabucoa"  >Yabucoa</option>
            <option value="Yauco"  >Yauco</option>
          </select> </td>
        </tr>
        <tr>
          <td><label for="salesprice">Precio de venta</label> </td>
          <td><input type="number" name="salesprice" value=""> </td>
        </tr>
        <tr>
          <td><label for="lotarea"></label>Área del lote</td>
          <td><input type="number" name="lotarea" value=""> </td>
        </tr>
        <tr>
          <td><label for="housearea"></label>Área de vivienda</td>
          <td><input type="number" name="housearea" value=""> </td>
        </tr>
        <tr>
        <td><input type="submit" name="submit" value="Buscar"></td>
        <td><input type="reset" name="reset" value="Borrar"></td>
        </tr>
      </form>
    </table>
  </body>
</html>
