<?php
    session_start();
    include '../conexion_bd.php';
	
    $a1 = addslashes($_POST['a1']); //bandera
    
    $cad = "";

    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    
    date_default_timezone_set("America/Guayaquil");
    $date_now = date('Y-m-d');
    
    $cad = $date_now;

	$sql="SELECT tmo, meta_tmo, ns, meta_ns, adherencia, meta_adherencia, convertibilidad, meta_convertib, participacion, meta_participa, cierre, meta_cierre FROM `datos_operativos` WHERE id='$a1'";  
	$resS=mysqli_query($enlace,$sql);
	$fila = mysqli_fetch_array($resS);
		
	for ($i = 0; $i < 12; $i++) {
        $cad = $cad ."$$". $fila[$i];
	}
				
	echo $cad;
	
	mysqli_close($enlace);
?>