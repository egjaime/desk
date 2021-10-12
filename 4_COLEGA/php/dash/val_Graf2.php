<?php
    session_start();
    include '../../../php/conexion_bd.php';

    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    date_default_timezone_set("America/Guayaquil");
    $date_now =  date('Y-m-d');
    
    $cad = "";
    
    $prt2 = substr($date_now, -5,2);
    $prt3 = $prt2 - 1;
    if ($prt3 === 0){
        $prt3 = 12;
    }

    //valido hasta que meses son de 31
    if ($prt3 === 1 || $prt3 === 3 || $prt3 === 5 || $prt3 === 7 || $prt3 === 8 || $prt3 === 10 || $prt3 === 12){
        $dia_final_m_a = 31;
    //valido si es hasta el 30
    }else if($prt3 === 4 || $prt3 === 6 || $prt3 === 9 || $prt3 === 11){
        $dia_final_m_a = 30;
    //sino por defecto es febrero
    }else{
        $dia_final_m_a = 29;
    }
    
    if ($prt2 === "01"){
        $prt3 = 12;
        //validar anio
        $anio = substr($date_now, 0,5);
        $anioT = $anio - 1;
        $prt4 = $anioT . '-' . $prt3 . '-01' ;
        $prt5 = $anioT . '-' . $prt3 . '-' .$dia_final_m_a ;
        $fch1 = $prt4;
        $fch2 = $prt5;
       //echo 'El mes anterior va desde el: ' . $prt4 . ' hasta el: ' . $prt5;
    }else{
        $prt3 = $prt2 - 1;
        $anio = substr($date_now, 0,5);
        if ($prt3 === 10 || $prt3 === 11 || $prt3 === 12){
            $prt4 = $anio . '-' . $prt3 . '-01' ;
            $prt5 = $anio . '-' . $prt3 . '-' .$dia_final_m_a ;
        }else{
            $prt4 = $anio . '0' . $prt3 . '-01' ;
            $prt5 = $anio . '0' . $prt3 . '-' .$dia_final_m_a ;
        }
        $fch1 = $prt4;
        $fch2 = $prt5;
        //echo 'El mes anterior va desde el: ' . $prt4 . ' hasta el: ' . $prt5;
    }
    
    $block = mysqli_query($enlace, "SELECT estado, count(estado) as Estado1 FROM gestion_colega WHERE fecha BETWEEN '$fch1' AND '$fch2' GROUP BY estado ORDER BY estado ASC");
	mysqli_data_seek ($block, 0);
	$row_block = mysqli_num_rows($block);
	$cad = $row_block;
	if ($row_block >= 1){
		$sql="SELECT estado, count(estado) as Estado1 FROM gestion_colega WHERE fecha BETWEEN '$fch1' AND '$fch2' GROUP BY estado ORDER BY estado ASC";  
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