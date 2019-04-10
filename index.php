<html>
<head>
  <title>Market</title>
  </head>
<body>
  <form name="form1" action="insert_prod.php" method="POST">
  <table border="0" align="center">
    <tr>
      <center><b><font face="Times new Roman" size="15" color="BLACK">Market</font></b></center><br>
    </tr>

    <tr>
      <td><font face="Times new Roman" size="5" color="BLACK">Codigo Producto: </font><br></td>
      <td><input type="text" required name="codprod"></td>
    </tr>

    <tr>
      <td><font face="Times new Roman" size="5" color="BLACK">Nombre Producto: </font><br></td>
      <td><input type="text" required name="nomprod"></td>
    </tr>

    <tr>
       <td><font face="Times new Roman" size="5" color="BLACK">Cantidad: </font><br></td>
      <td><input type="number" required name="cantprod"></td>
    </tr>

    <tr>
      <td><font face="Times new Roman" size="5" color="BLACK">Estado Producto:</font><br><br></td>
      <td><select required name="estprod">
          <option value="">Estado</option>
          <option value="1">Habilitado</option>
          <option value="0">Deshabilitado</option>
        </select>
      </td>
    </tr>

    <tr>
      <td colspan="2" align="center"><input type="submit" value="Registrar"></td>
    </tr>
  </table>
</form>
</body>
</html>
