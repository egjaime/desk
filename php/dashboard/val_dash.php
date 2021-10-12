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
    
    $block = mysqli_query($enlace, "SELECT CONCAT(u.1er_nombre,' ', u.1er_apellido) As Nombre, COUNT(*) AS Total, SUM(g.tmo) as TMO, (SUM(g.tmo)/COUNT(*)) as Pos  FROM gestion g INNER JOIN usuarios u ON u.id=g.id_usuario WHERE g.fecha_call BETWEEN '$fch1' AND '$fch2' AND estado!=6 AND pendiente=0 GROUP BY g.id_usuario HAVING COUNT(*) >= 1 ORDER BY Pos");
	mysqli_data_seek ($block, 0);
	$row_block = mysqli_num_rows($block);
	if ($row_block >= 1){
		$sql="SELECT CONCAT(u.1er_nombre,' ', u.1er_apellido) As Nombre, COUNT(*) AS Total, SUM(g.tmo) as TMO, (SUM(g.tmo)/COUNT(*)) as Pos  FROM gestion g INNER JOIN usuarios u ON u.id=g.id_usuario WHERE g.fecha_call BETWEEN '$fch1' AND '$fch2' AND estado!=6 AND pendiente=0 GROUP BY g.id_usuario HAVING COUNT(*) >= 1 ORDER BY Pos";  
		$resS=mysqli_query($enlace,$sql);
		while ($fila = mysqli_fetch_array($resS)){
		    
    		$tmoRT = floor($fila[2]  / $fila[1]);
    		$tmoM = floor($tmoRT / 60);
            $tmoM2 = $tmoM * 60;
            if($tmoM >= '5'){   
                $tmoS = $tmoRT - $tmoM2;
                if(strlen($tmoM) == '1'){
                    $tmoM = "0" . $tmoM;
                }
                if(strlen($tmoS) == '1'){
                    $tmoS = "0" . $tmoS;
                }
                $tmoT = $tmoM . ":" . $tmoS;
                $cad = $cad ."$$". $fila[0]."$$". $fila[1]."$$". $tmoT;
		    }
		}

		echo $cad;	
	}else{
		echo '1';
	} 

    mysqli_close($enlace);
?>