<?php

  include("database.php");

  $nombre = $_POST["nombre_u"];
  $apellidos = $_POST["apellidos_u"];
  $apodo = $_POST["nick"];
  $correo = $_POST["email"];
  $tel = $_POST["telefono"];
  //$contraseña = MD5($_POST["password"]);
  $contraseña = password_hash($_POST["password"],PASSWORD_DEFAULT);

  //VALIDAR SI EL USUARIO YA EXISTE
  $sql_validar_user="SELECT * FROM productos WHERE email='$correo'";
  $result=$conn->query($sql_validar_user);
  if ($result->num_rows == 0) {
    $sql = "INSERT INTO productos (nombre_u,apellidos_u,nick,email,telefono,password )
    VALUES ('$nombre','$apellidos','$apodo','$correo','$tel','$contraseña')";
    if ($conn->query($sql)===TRUE) {
      //echo "Producto registrado con exito";
      //echo "<a href='index.php'>Regresar</a>";
      echo "<script language='javascript'>alert(':::usuario registrado con exito:::')</script>";
      header("Refresh:0;url=login.php");
    }else {
      echo "error: ".$sql."<br>".$conn->error;
      }
  }else {
  echo "<script language='javascript'>alert(':::usuario ya existe:::')</script>";
  }




 ?>
