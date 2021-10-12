<?php
    session_start();
    include '../../../php/conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //boleta
        $a2 = addslashes($_POST['a2']); //valor
        $a3 = addslashes($_POST['a3']); //fecha de transito
        $a4 = addslashes($_POST['a4']); //hora de transito
        $a5 = addslashes($_POST['a5']); //observacion
        $a6 = addslashes($_POST['a6']); //radar
        $a7 = addslashes($_POST['a7']); //codigo_bd
        $a8 = addslashes($_POST['a8']); //nombre 
        $a9 = addslashes($_POST['a9']); //cedula
        $a10 = addslashes($_POST['a10']); //placa
        $a11 = addslashes($_POST['a11']); //telf
        
    	$sql = "INSERT INTO HBOFidelizacion (codigo_bd, codigo_excel, cedula, nombre, placa, nm_citacion, fecha_citacion, hora_citacion, valor, radar, telf, cod_venta, estado_venta, fecha_atencion, hora_asignado, hora_guardado, fecha_agendamiento, hora_agendamiento, cant_contactos, cod_vendedor, motivo_tip2, observacion, asignado_fecha) VALUES
(NULL,'$a7','$a9','$a8','$a10','$a1','$a3','$a4','$a2','$a6','$a11','1','EXITOSO',NOW(),NOW(),' ',' ',' ','1','{$_SESSION['id']}',' ',upper('$a5'),'0000-00-00')";
        $row=mysqli_query($enlace,$sql);

        echo '1';
    }else{
        echo '<script language =  javascript>  self.location = "index.php" </script>';
    }
    mysqli_close($enlace);
?>