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


<table border= 1 align="center">
<tr><th>CODIGO</th><th>NOMBRE</th><th>CANTIDAD</th><th>.</th><th>..</th></tr>
 <?php
//1.coneccion de base de datos
include("database.php");
//2.crear sql y guardar los datos
$sql="SELECT * FROM productos";
$result= $conn->query($sql);
//3.mostrar datos
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td>".$row["codigo_prod"]."</td>";
  echo "<td>".$row["nombre_prod"]."</td>";
  echo "<td>".$row["cantidad"]."</td>";
  echo "<td><img src='icons/edit.png' width='20'></td>";
  echo "<td><a href='delete_prod.php?cod=".$row["codigo_prod"]."'><img src='icons/delete.png' width='20'></td>";
  echo "</tr>";
}
}else {
  echo "::: No hay productos registrados :::";
}
?>
