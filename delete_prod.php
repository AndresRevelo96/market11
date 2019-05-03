<?php
$codigo= $_GET['cod'];
//1. coneccion base de datos
include("database.php");
//2. crear sql para eliminar
$sql= "DELETE FROM productos WHERE codigo_prod='$codigo'";
//3. ejecutar
$conn->query($sql);
//4.confirmacion
  echo "<script language='javascript'>alert('::: producto eliminado con exito :::')</script>";
  header("Refresh:0;url=index.php");
 ?>
