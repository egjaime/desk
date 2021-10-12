<?php
    session_start();
    include '../conexion_bd.php';

    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    date_default_timezone_set("America/Guayaquil");
    $date_now =  date('Y-m-d');
    
    $cad = "";
    
    $prt = substr($date_now, 0, 8);
    $prt = $prt . '01';
    $fch1 = $prt;
    $fch2 = $date_now;
    
    $block = mysqli_query($enlace, "SELECT estado, count(estado) as Estado1 FROM gestion WHERE fecha_call BETWEEN '$fch1' AND '$fch2' GROUP BY estado ORDER BY estado ASC");
	mysqli_data_seek ($block, 0);
	$row_block = mysqli_num_rows($block);
	$cad = $row_block;
	if ($row_block >= 1){
		$sql="SELECT estado, count(estado) as Estado1 FROM gestion WHERE fecha_call BETWEEN '$fch1' AND '$fch2' GROUP BY estado ORDER BY estado ASC";  
		$resS=mysqli_query($enlace,$sql);
		while ($fila = mysqli_fetch_array($resS)){
	       $cad = $cad ."$$". $fila[0]."$$". $fila[1];
		}

		echo $cad;	
	}else{
		echo '1';
	} 

    mysqli_close($enlace);
?>