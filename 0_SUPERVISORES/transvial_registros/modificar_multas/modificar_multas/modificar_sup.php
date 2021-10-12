<?php
    session_start();
    include '../../../../php/conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //cod venta
        $a2 = addslashes($_POST['a2']); //estado de venta
        $a3 = addslashes($_POST['a3']); //fecha de agendamiento
        $a4 = addslashes($_POST['a4']); //hora de agendamiento
        $a5 = addslashes($_POST['a5']); //motivo no deseo
        $a6 = addslashes($_POST['a6']); //observacion
        $a7 = addslashes($_POST['a7']); //no aplica
        $a8 = addslashes($_POST['a8']); //pendiente
        $a9 = addslashes($_POST['a9']); //codigo a modificar
        $a10 = addslashes($_POST['a10']); //ccitacion
        $a11 = addslashes($_POST['a11']); //fecha de asignacion
        $a32 = addslashes($_POST['a32']); //multa
        $a42 = addslashes($_POST['a42']); //placa
        
        if($a1==3){ 
    	   $sql = "UPDATE HBOFidelizacion SET cod_venta='$a1',nm_citacion='$a10', valor='$a32', placa='$a42', fecha_atencion='$a11', estado_venta='$a2', motivo_tip2='$a5', observacion=upper('$a6') WHERE codigo_bd='$a9'";
           $row=mysqli_query($enlace,$sql);
       
        }elseif ($a1==2){
           $sql = "UPDATE HBOFidelizacion SET cod_venta='$a1',nm_citacion='$a10', valor='$a32', placa='$a42', fecha_atencion='$a11', estado_venta='$a2',  motivo_tip2='$a7', observacion=upper('$a6') WHERE codigo_bd='$a9'";
           $row=mysqli_query($enlace,$sql); 
        
            
        }elseif ($a1==4 || $a1==5){
           $sql = "UPDATE HBOFidelizacion SET cod_venta='$a1',nm_citacion='$a10', valor='$a32', placa='$a42', fecha_atencion='$a11', estado_venta='$a2', fecha_agendamiento='$a3', hora_agendamiento='$a4', motivo_tip2='$a8', observacion=upper('$a6') WHERE codigo_bd='$a9'";
           $row=mysqli_query($enlace,$sql); 
                   
        }elseif ($a1==1){
           $sql = "UPDATE HBOFidelizacion SET cod_venta='$a1', nm_citacion='$a10', valor='$a32', placa='$a42', fecha_atencion='$a11', estado_venta='$a2', observacion=upper('$a6'), fecha_agendamiento='', hora_agendamiento='', motivo_tip2=''  WHERE codigo_bd='$a9'";
           $row=mysqli_query($enlace,$sql); 
        }

    	echo '1';
    }else{
        echo '<script language =  javascript>  self.location = "index.php" </script>';
    }
    mysqli_close($enlace);
?>