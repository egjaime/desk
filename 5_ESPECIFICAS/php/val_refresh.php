<?php
    session_start();
    include '../../php/conexion_bd.php';
	
    $a1 = addslashes($_POST['a1']); //fecha
	 
    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    
    date_default_timezone_set("America/Guayaquil");
    $date_now =  date('Y-m-d');
    
    if ($a1 === "0"){
        $fch1 = $date_now;
        $fch2 = $date_now;
    }else if ($a1 === "1"){
        $date_ayer = strtotime('-1 day', strtotime($date_now));
        $date_ayer = date('Y-m-d', $date_ayer);
        $fch1 = $date_ayer;
        $fch2 = $date_ayer;
        //echo 'Ayer fue: ' . $date_ayer;
    }else if ($a1 === "2"){
        $prt = substr($date_now, 0, 8);
        $prt = $prt . '01';
        $fch1 = $prt;
        $fch2 = $date_now;
        //echo 'El mes va desde el: ' . $prt . ' hasta el: ' . $date_now;
    }else if ($a1 === "3"){
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

    }

	$block = mysqli_query($enlace, "SELECT COUNT(*) as total  FROM retenciones WHERE id_user='{$_SESSION['id']}' AND fecha_hora BETWEEN '$fch1' AND '$fch2' AND estado=1");
	mysqli_data_seek ($block, 0);
	$row = mysqli_fetch_array($block);
	
	$block2 = mysqli_query($enlace, "SELECT COUNT(*) as total  FROM retenciones WHERE id_user='{$_SESSION['id']}' AND fecha_hora BETWEEN '$fch1' AND '$fch2' AND estado=2");
	mysqli_data_seek ($block2, 0);
	$row2 = mysqli_fetch_array($block2);
	
	$block3 = mysqli_query($enlace, "SELECT COUNT(*) as total  FROM retenciones WHERE id_user='{$_SESSION['id']}' AND fecha_hora BETWEEN '$fch1' AND '$fch2' AND estado=3");
	mysqli_data_seek ($block3, 0);
	$row3 = mysqli_fetch_array($block3);

	
	echo $row[0];
 	echo '_';
	echo $row2[0];
    echo '_';
	echo $row3[0];
	
    mysqli_close($enlace);
?>