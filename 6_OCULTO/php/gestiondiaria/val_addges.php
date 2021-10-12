<?php
    session_start();
    include '../../../php/conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //Nombre
        $a2 = addslashes($_POST['a2']); //cedula
    	$a3 = addslashes($_POST['a3']); //ns
        $a4 = addslashes($_POST['a4']); //TIPIFICACION
    	$a5 = addslashes($_POST['a5']); //GESTION EXITOSA
    	$a6 = addslashes($_POST['a6']); //OBSERVACION


        $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
		
            $result="INSERT INTO gestion_oculto (id_user,fecha_registro,hora_registro,nombre_cliente,cedula_cliente,ns,gestion_exitosa,tipificacion,observacion) VALUES ('{$_SESSION['id']}',NOW(), NOW(), upper('$a1'),'$a2','$a3','$a5','$a4',upper('$a6'))";  
			$row=mysqli_query($enlace,$result);
			
			$block6 = mysqli_query($enlace, "SELECT id FROM gestion_oculto WHERE id=(SELECT max(id) FROM gestion_oculto) AND id_user='{$_SESSION['id']}'");
	        mysqli_data_seek ($block6, 0);
	        $row6 = mysqli_fetch_array($block6);
			
            echo '1';
            echo '_';
            echo $row6[0];
    }else{
            echo '7';
    }
    mysqli_close($enlace);
?>