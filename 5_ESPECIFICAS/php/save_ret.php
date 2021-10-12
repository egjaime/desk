<?php
    session_start();
    include '../../php/conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //numero de servicio
        $a2 = addslashes($_POST['a2']); //fecha
    	$a3 = addslashes($_POST['a3']); //beneficio
    	$a4 = addslashes($_POST['a4']); //observacion
    	$a5 = addslashes($_POST['a5']); //estado

        $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
		
        $result="INSERT INTO retenciones (id_user,num_serv,fecha_hora,beneficio,estado,observacion) VALUES ('{$_SESSION['id']}','$a1','$a2',upper('$a3'),'$a5',upper('$a4'))";  
		$row=mysqli_query($enlace,$result);
		echo '1';

			
    }else{
        echo '7';
    }
    mysqli_close($enlace);
?>