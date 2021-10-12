<?php
    session_start();
    include '../conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //cedula
        $a2 = addslashes($_POST['a2']); //contrato
    	$a3 = addslashes($_POST['a3']); //queja


        $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
		
        $result="INSERT INTO int_retiro (id_asesor,cedula,contrato,queja,fecha_carga ) VALUES ('{$_SESSION['id']}','$a1','$a2','$a3',NOW())";  
		$row=mysqli_query($enlace,$result);
		echo '1';

			
    }else{
        echo '7';
    }
    mysqli_close($enlace);
?>