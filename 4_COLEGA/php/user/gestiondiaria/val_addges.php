<?php
    session_start();
    include '../../../../php/conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //anilllamador
        $a2 = addslashes($_POST['a2']); //hora
    	$a3 = addslashes($_POST['a3']); //omnicanal
        $a5 = addslashes($_POST['a5']); //fecha
    	$a6 = addslashes($_POST['a6']); //tmo
    	$a7 = addslashes($_POST['a7']); //estado
    	$a8 = addslashes($_POST['a8']); //observacion
    	$a99 = addslashes($_POST['a99']); //check omnicanal
    	$a19 = addslashes($_POST['vb']); //Si no
    	
    	$b1 = addslashes($_POST['b1']); //id_llamada
    	$a12 = addslashes($_POST['a21']); //user genesis
    	$a13 = addslashes($_POST['a31']); //hora cierre
    	$a14 = addslashes($_POST['a41']); //motivo cierre
    	
        $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
		
		if($a19 == 'Si'){
            $result="INSERT INTO gestion_colega (id_user,ns_splitter,hora,omnicanal,fecha,tmo,estado,observacion,falla_omni,caida,id_llamada,hora_cierre,user_genesis,motivo) VALUES ('{$_SESSION['id']}','$a1','$a2','$a3','$a5','$a6','$a7',upper('$a8'),'$a99','$a19','$b1','$a13','$a12','$a14')";  
			$row=mysqli_query($enlace,$result);
			echo '1';
		}else{
		    $result="INSERT INTO gestion_colega (id_user,ns_splitter,hora,omnicanal,fecha,tmo,estado,observacion,falla_omni,caida) VALUES ('{$_SESSION['id']}','$a1','$a2','$a3','$a5','$a6','$a7',upper('$a8'),'$a99','$a19')";  
			$row=mysqli_query($enlace,$result);
			echo '1';
		}
    }else{
        echo '7';
    }
    mysqli_close($enlace);
?>