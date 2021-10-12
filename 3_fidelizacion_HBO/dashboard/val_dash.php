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
    
    $block = mysqli_query($enlace, "SELECT CONCAT(u.1er_nombre,' ',u.2do_nombre,' ',u.1er_apellido,' ',u.2do_apellido) As Nombre, COUNT(*) AS Total FROM HBOFidelizacion g INNER JOIN usuarios u ON u.id=g.`cod_vendedor` WHERE g.`fecha_atencion` BETWEEN '$fch1' AND '$fch2' AND `cod_venta`=1 GROUP BY g.`cod_vendedor` HAVING COUNT(*) >= 1 ORDER BY `Total` DESC");
	mysqli_data_seek ($block, 0);
	$row_block = mysqli_num_rows($block);
	if ($row_block >= 1){
		$sql="SELECT CONCAT(u.1er_nombre,' ',u.2do_nombre,' ',u.1er_apellido,' ',u.2do_apellido) As Nombre, COUNT(*) AS Total FROM HBOFidelizacion g INNER JOIN usuarios u ON u.id=g.`cod_vendedor` WHERE g.`fecha_atencion` BETWEEN '$fch1' AND '$fch2' AND `cod_venta`=1 GROUP BY g.`cod_vendedor` HAVING COUNT(*) >= 1 ORDER BY `Total` DESC";  
		$resS=mysqli_query($enlace,$sql);
		while ($fila = mysqli_fetch_array($resS)){
            $cad = $cad ."$$". $fila[0]."$$". $fila[1]."$$". $tmoT;
		}
		echo $cad;	
	}else{
		echo '1';
	} 

    mysqli_close($enlace);
?>