<?php
    session_start();
    include '../../../php/conexion_bd.php';

    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    date_default_timezone_set("America/Guayaquil");
    $date_now =  date('Y-m-d');
    
    $cad = "";
    
    $prt = substr($date_now, 0, 8);
    $prt = $prt . '01';
    $fch1 = $prt;
    $fch2 = $date_now;
    

		$sql="SELECT CONCAT(u.1er_nombre,' ', u.1er_apellido) As Nombre, COUNT(*) AS Total, SUM(g.tmo) as TMO, (SUM(g.tmo)/COUNT(*)) as Pos  FROM gestion_colega g INNER JOIN usuarios u ON u.id=g.id_user WHERE g.fecha BETWEEN '$fch1' AND '$fch2'  GROUP BY g.id_user HAVING COUNT(*) >= 1 ORDER BY Pos";  
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


    mysqli_close($enlace);
?>