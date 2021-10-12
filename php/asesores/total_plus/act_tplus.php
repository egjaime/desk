<?php
    session_start();
    include '../../conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //virtual
        $a2 = addslashes($_POST['a2']); //fecha
    	$a3 = addslashes($_POST['a3']); //servicio
    	$a4 = addslashes($_POST['a4']); //contrato
    	$a5 = addslashes($_POST['a5']); //observacion

    	
        $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
		
        $result="INSERT INTO total_plus_tmp (id_user,n_servicio,fecha,n_contrato,n_virtual,observacion) VALUES ('{$_SESSION['id']}','$a3','$a2','$a4','$a1',upper('$a5'))";  
		$row=mysqli_query($enlace,$result);
		echo '1';

			
    }else{
        echo '7';
    }
    mysqli_close($enlace);
?>