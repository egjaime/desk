<?php
    session_start();
    include '../../php/conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //numero de servicio
        $a2 = addslashes($_POST['a2']); //fecha
    	$a3 = addslashes($_POST['a3']); //beneficio
    	$a4 = addslashes($_POST['a4']); //observacion
    	$a5 = addslashes($_POST['a5']); //estado
        $a7 = addslashes($_POST['a7']); //ccampo de validacion imp

    	$sql = "UPDATE retenciones SET num_serv='$a1', fecha_hora=NOW(), beneficio=upper('$a3'), estado=upper('$a5'), observacion=upper('$a4'), id_user='{$_SESSION['id']}'  WHERE id_retencion='$a7'";
        $row=mysqli_query($enlace,$sql);

    	echo '1';
    }else{
        echo '<script language =  javascript>  self.location = "index.php" </script>';
    }
    mysqli_close($enlace);