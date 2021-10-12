<?php
    session_start();
    include '../../php/conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //cod venta
        $a2 = addslashes($_POST['a2']); //estado de venta
        $a3 = addslashes($_POST['a3']); //fecha de agendamiento
        $a4 = addslashes($_POST['a4']); //hora de agendamiento
        $a5 = addslashes($_POST['a5']); //motivo no deseo
        $a6 = addslashes($_POST['a6']); //observacion
        $a7 = addslashes($_POST['a7']); //no aplica
        $a8 = addslashes($_POST['a8']); //pendiente
        
        if($a5<>""){ 
        
    	   $sql = "UPDATE HBOFidelizacion SET cod_venta='$a1', estado_venta='$a2',cant_contactos=cant_contactos+1, motivo_tip2='$a5',hora_guardado=now(), observacion=upper('$a6'),asignado_fecha =now() WHERE codigo_bd='{$_SESSION['id_hbo']}'";
           $row=mysqli_query($enlace,$sql);
       
        }elseif ($a7<>""){
           $sql = "UPDATE HBOFidelizacion SET cod_venta='$a1', estado_venta='$a2',cant_contactos=cant_contactos+1, motivo_tip2='$a7',hora_guardado=now(), observacion=upper('$a6'),asignado_fecha =now() WHERE codigo_bd='{$_SESSION['id_hbo']}'";
           $row=mysqli_query($enlace,$sql); 
        
            
        }elseif ($a8<>""){
           $sql = "UPDATE HBOFidelizacion SET cod_venta='$a1', estado_venta='$a2',fecha_agendamiento='$a3', hora_agendamiento='$a4', cant_contactos=cant_contactos+1, motivo_tip2='$a8',hora_guardado=now(), observacion=upper('$a6'),asignado_fecha =now() WHERE codigo_bd='{$_SESSION['id_hbo']}'";
           $row=mysqli_query($enlace,$sql); 
                   
        }elseif ($a1=="1"){
           $sql = "UPDATE HBOFidelizacion SET cod_venta='$a1', estado_venta='$a2', cant_contactos=cant_contactos+1, hora_guardado=now(), observacion=upper('$a6'),asignado_fecha =now() WHERE codigo_bd='{$_SESSION['id_hbo']}'";
           $row=mysqli_query($enlace,$sql); 
        }
    	echo '1';
    }else{
        echo '<script language =  javascript>  self.location = "index.php" </script>';
    }
    mysqli_close($enlace);
?>