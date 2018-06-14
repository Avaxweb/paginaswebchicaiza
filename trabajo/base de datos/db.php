<?php
include("conexion.php");
$NOMBRE=$_POST['nombre'];
$USUARIO=$_POST['usuario'];
$CONTRASEÑA=$_POST['contraseña'];
$mysqli="INSERT INTO base de datos(nombre,usuario,contraseña) VALUES('$NOMBRE','$USUARIO','$CONTRASEÑA)";
$ejecutar=@mysqli_query($conectar,$mysqli);
$resultado=$conexion 
?>