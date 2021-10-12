<?php
    session_start();
    include '../../php/conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //servicio
        $a2 = addslashes($_POST['a2']); //queja
    	$a3 = addslashes($_POST['a3']); //estado ic
    	$a4 = addslashes($_POST['a4']); //estado open
    	$a5 = addslashes($_POST['a5']); //observacion


        $result="INSERT INTO INT_ic_open (id_user,fecha,hora,n_servicio,n_queja,estado_ic,estado_open,observacion) VALUES ('{$_SESSION['id']}',NOW(),NOW(),'$a1','$a2','$a3','$a4',upper('$a5'))";  
		$row=mysqli_query($enlace,$result);
		echo '1';

			
    }else{
        echo '7';
    }
    mysqli_close($enlace);
?>