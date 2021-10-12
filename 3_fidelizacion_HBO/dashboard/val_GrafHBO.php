<?php
    session_start();
    include '../../php/conexion_bd.php';

    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    date_default_timezone_set("America/Guayaquil");
    $date_now =  date('Y-m-d');
    
    $cad = "";
    
    $prt = substr($date_now, 0, 8);
    $prt = $prt . '01';
    $fch1 = $prt;
    $fch2 = $date_now;
    
    $block = mysqli_query($enlace, "SELECT `cod_venta`, count(`cod_venta`) as Cantidad FROM HBOFidelizacion WHERE `fecha_atencion` BETWEEN '$fch1' AND '$fch2' AND `cod_venta`!='0' AND `cod_venta`!=6 AND `cod_venta`!='9' GROUP BY `cod_venta` ORDER BY `cod_venta` ASC");
	mysqli_data_seek ($block, 0);
	$row_block = mysqli_num_rows($block);
	$cad = $row_block;
	if ($row_block >= 1){
		$sql="SELECT `cod_venta`, count(`cod_venta`) as Cantidad FROM HBOFidelizacion WHERE `fecha_atencion` BETWEEN '$fch1' AND '$fch2' AND `cod_venta`!='0' AND `cod_venta`!=6 AND `cod_venta`!='9' GROUP BY `cod_venta` ORDER BY `cod_venta` ASC";  
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