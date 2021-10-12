<?php 
    $usuario = "impulsa_userDesk";
	$password = ".Desk12.A";
	$servidor = "localhost";
	$basededatos = "impulsa_bd_imp";
	
	// creacion de la conexion a la base de datos con mysql_connect()
	$enlace = mysqli_connect($servidor, $usuario, $password) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Seleccion del a base de datos a utilizar
	$db = mysqli_select_db( $enlace, $basededatos ) or die ( "Upps! Pues no se ha podido conectar a la base de datos" );
?>