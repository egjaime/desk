<?php
    session_start();
    include '../../conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //contrato
        $a2 = addslashes($_POST['a2']); //cédula


        $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
		
        $result="INSERT INTO amc (id_user,fecha_carga,contrato,cedula) VALUES ('{$_SESSION['id']}',NOW(), '$a1','$a2')";  
		$row=mysqli_query($enlace,$result);
		echo '1';

    }else{
        echo '7';
    }
    mysqli_close($enlace);
?>