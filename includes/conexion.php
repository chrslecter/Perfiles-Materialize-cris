<?php
$mysqli = new mysqli("localhost","root","","graduat3s");
	 //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		echo "conexion fallo";
		exit();
	}

		if (!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
    exit();

//ESTO ES MODIFICAR REGISTRO


} ?>

