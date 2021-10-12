<?php
	session_start(); //inicializa una sesi�n y crea el identificador de sesi�n.
	//session_unset($_SESSION['id']); //limpia todas la variables de sesi�n registradas.
	session_destroy(); //elimina todas la variables de sesi�n registradas.
	header('Location:../index.php');
    exit;
?>