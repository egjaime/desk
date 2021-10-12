<?php
    session_start();
    include '../../php/conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $camp1 = addslashes($_POST['a1']); //RUC
        $camp2 = addslashes($_POST['a2']); //Cedula
        $camp3 = addslashes($_POST['a3']); //Telefono
        $camp4 = addslashes($_POST['a4']); //Observacion

        $result="INSERT INTO virtuales (id_user,n_servicio,cedula,celular,fecha,observacion) VALUES ('{$_SESSION['id']}','$camp1','$camp2','$camp3',NOW(),upper('$camp4'))";  
		$row=mysqli_query($enlace,$result);
         echo '1';

    }else{
        echo '7';
    }
    mysqli_close($enlace);
?>