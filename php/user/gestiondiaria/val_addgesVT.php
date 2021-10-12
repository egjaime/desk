<?php
    session_start();
    include '../../conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //anilllamador
        $a2 = addslashes($_POST['a2']); //hora
    	$a3 = addslashes($_POST['a3']); //omnicanal
    	$a4 = addslashes($_POST['a4']); //cedula
        $a5 = addslashes($_POST['a5']); //fecha
    	$a6 = addslashes($_POST['a6']); //tmo
    	$a7 = addslashes($_POST['a7']); //estado
    	$a8 = addslashes($_POST['a8']); //observacion
    	$a99 = addslashes($_POST['a99']); //check omnicanal
    	$a40 = addslashes($_POST['a40']); //respuesta total plus
    	
    	$bandera = 0;
    
        $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
		
		$block = mysqli_query($enlace, "SELECT omnicanal, estado FROM gestion WHERE omnicanal='$a3'");
		mysqli_data_seek ($block, 0);
		$row_block = mysqli_num_rows($block);
		if ($row_block >= 1 && $a7 != 2 && $a99 == 0){
			$sql="SELECT omnicanal, estado FROM gestion WHERE omnicanal='$a3'";  
			$resS=mysqli_query($enlace,$sql);
		    while ($fila = mysqli_fetch_array($resS)){
		        if ($bandera == 0){
    			    if ($fila[1] == 1 || $fila[1] == 3 || $fila[1] == 4 || $fila[1] == 5){
    				    echo '3';
    				    $bandera = 1;
    				}else{
    					if (empty($a1) or empty($a2) or empty($a3) or empty($a4) or empty($a5) or empty($a6) or empty($a7)){
    						echo '2';
    						$bandera = 1;
    					}else{
    						$result="INSERT INTO gestion (id_usuario,anillamador,fecha_call,hora_inicio,tmo,omnicanal,estado,cedula,observacion,pendiente,consulta_tp_tmp) VALUES ('{$_SESSION['id']}','$a1','$a5','$a2','$a6','$a3','$a7','$a4',upper('$a8'),'$a99','$a40')";  
    						$row=mysqli_query($enlace,$result);
    						echo '1';
    						$bandera = 1;
    					}
    				}
		        }
			}
		}else {
            $result="INSERT INTO gestion (id_usuario,anillamador,fecha_call,hora_inicio,tmo,omnicanal,estado,cedula,observacion,pendiente,consulta_tp_tmp) VALUES ('{$_SESSION['id']}','$a1','$a5','$a2','$a6','$a3','$a7','$a4',upper('$a8'),'$a99','$a40')";  
			$row=mysqli_query($enlace,$result);
			echo '1';
        }
			
    }else{
        echo '7';
    }
    mysqli_close($enlace);
?>