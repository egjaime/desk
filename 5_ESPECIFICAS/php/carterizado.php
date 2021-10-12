<?php
    session_start();
    include '../../php/conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $camp1 = addslashes($_POST['a1']); //RUC
        $camp2 = addslashes($_POST['a2']); //Observacion

        $result="INSERT INTO carterizados (id_user,ruc_carterizado,fecha,observacion) VALUES ('{$_SESSION['id']}','$camp1',NOW(),upper('$camp2'))";  
		$row=mysqli_query($enlace,$result);
         echo '1';

    }else{
        echo '7';
    }
    mysqli_close($enlace);
?>