<?php
    session_start();
    include '../conexion_bd.php';
	
    $a1 = addslashes($_POST['a1']); //eliminar
	
	//$a1 = "1758760224"; //eliminar
	
    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes

	if (empty($a1)){
    	echo '2';
	}else{
		$result="DELETE FROM usuarios WHERE ci='$a1'";  
		$row=mysqli_query($enlace,$result);
		echo '1';
	}
	mysqli_close($enlace);
?>