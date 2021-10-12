<?php
    session_start();
    include '../conexion_bd.php';

    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    
    $cad = "";

	$sql="SELECT * FROM datos_operativos WHERE id='1' ";  
	$resS=mysqli_query($enlace,$sql);
	while ($fila = mysqli_fetch_array($resS)){
	   $cad = "$$". $fila[1] . "$$" . $fila[2] . "$$" . $fila[3] . "$$" .  $fila[4] . "$$" . $fila[5] . "$$" . $fila[6] . "$$" . $fila[7] . "$$" . $fila[8] . "$$" . $fila[9] . "$$" . $fila[10] . "$$" . $fila[11] . "$$" . $fila[12] . "$$" . $fila[13];
	}
	echo $cad;	

   mysqli_close($enlace);
?>