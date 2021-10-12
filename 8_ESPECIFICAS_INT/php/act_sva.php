<?php
    session_start();
    include '../../php/conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //n servicio
        $a2 = addslashes($_POST['a2']); //linea
    	$a3 = addslashes($_POST['a3']); //motivo
    	$a4 = addslashes($_POST['a4']); //observacion

        $result="INSERT INTO INT_inter_bit (id_user,fecha,hora,n_servicio,linea,motivo,observacion) VALUES ('{$_SESSION['id']}',NOW(),NOW(),'$a1','$a2','$a3',upper('$a4'))";  
		$row=mysqli_query($enlace,$result);
		echo '1';

    }else{
        echo '7';
    }
    mysqli_close($enlace);
?>