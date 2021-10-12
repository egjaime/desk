<?php
    session_start();
    include '../../../php/conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //cod venta
        $a2 = addslashes($_POST['a2']); //estado de venta
        $a3 = addslashes($_POST['a3']); //fecha de agendamiento
        $a4 = addslashes($_POST['a4']); //hora de agendamiento
        $a5 = addslashes($_POST['a5']); //motivo no deseo
        $a6 = addslashes($_POST['a6']); //observacion
        $a7 = addslashes($_POST['a7']); //campo a modificar
        
    	$sql = "UPDATE HBOFidelizacion SET cod_venta='$a1', estado_venta='$a2', fecha_agendamiento='$a3', hora_agendamiento='$a4', cant_contactos=cant_contactos+1, motivo_no_desea='$a5', observacion='$a6', asignado_a='0', fecha_atencion=now(), cod_vendedor='{$_SESSION['id']}'  WHERE codigo_bd='$a7'";
        $row=mysqli_query($enlace,$sql);

    	echo '1';
    }else{
        echo '<script language =  javascript>  self.location = "index.php" </script>';
    }
    mysqli_close($enlace);
?>