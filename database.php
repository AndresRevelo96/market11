<?php
//credenciales de coneccion BD
//127.0.0.1/market/database.php
$username = "root";
$servername = "localhost"; //127.0.0.1
$password = "";
$dbname = "market";
//------------------------------------
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
  die("Error: " . connect_error);
}else {
  die("Conexiòn exitosa a Market");
}
 ?>
