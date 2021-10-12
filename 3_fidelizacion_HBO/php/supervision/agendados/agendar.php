<?php
    session_start();
    include '../../../../php/conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //iduser
        $a2 = addslashes($_POST['a2']); //user
        $a3 = addslashes($_POST['a3']); //idcaso

	    $sql = "UPDATE HBOFidelizacion SET asignado_a='$a1' WHERE codigo_bd='$a3'";
        $row=mysqli_query($enlace,$sql);

    	echo '1';
    }else{
        echo '<script language =  javascript>  self.location = "index.php" </script>';
    }
    mysqli_close($enlace);
?>