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
    	
    	$a11 = addslashes($_POST['a11']); //id_call
    	$a21 = addslashes($_POST['a21']); //usuario genesis
    	$a31 = addslashes($_POST['a31']); //hora cierre
    	$a41 = addslashes($_POST['a41']); //motivo
    	
    	$a99 = addslashes($_POST['a99']); //motivo
    
    	
    
        $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    	
    	if (empty($a1) or empty($a2) or empty($a3) or empty($a4) or empty($a5) or empty($a6) or empty($a7) or empty($a11) or empty($a21) or empty($a31) or empty($a41)){
        	echo '2';
    	}else{
    		$result="INSERT INTO gestion (id_usuario,anillamador,fecha_call,hora_inicio,tmo,omnicanal,estado,cedula,observacion,pendiente) VALUES ('{$_SESSION['id']}','$a1','$a5','$a2','$a6','$a3','$a7','$a4',upper('$a8'),'$a99')";  
    		$row=mysqli_query($enlace,$result);
    		
    		//consulto ID
    		$sql="SELECT id FROM gestion WHERE id_usuario='{$_SESSION['id']}' ORDER BY id DESC LIMIT 1";  
    		$resS=mysqli_query($enlace,$sql);
    		$fila = mysqli_fetch_array($resS);
    		
    		//registro en gestion_sa
    		$result3="INSERT INTO gestion_sa (id_gestion,id_usuario, id_genesis,user_genesis,hora_cierre,motivo_cierre) VALUES ('$fila[0]','{$_SESSION['id']}','$a11','$a21','$a31','$a41')";  
    		$row3=mysqli_query($enlace,$result3);
    		
    		echo '1';
    	}
    	
    }else{
        echo '7';
    }
    mysqli_close($enlace);
?>