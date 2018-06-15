<?php

$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$query="INSERT INTO base de datos(nombre,usuario,contraseña) VALUES('$nombre','$usuario','$contraseña)";
$ejecutar=@mysqli_query($conectar,$mysqli);
$resultado =$conexion - >query($query); 
if ($result){
	echo "ingreso completado";
	
}
else
	{
		echo "fallo al conectar";
	}
?> 