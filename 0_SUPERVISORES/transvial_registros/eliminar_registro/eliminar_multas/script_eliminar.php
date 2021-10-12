<?php
  session_start();
  date_default_timezone_set("America/Guayaquil"); 
  include '../../../../php/conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = $_POST['a1']; //codigo
        $a2 = $_POST['a2']; //cedula
        $a3 = $_POST['a3']; //nombre
        $a4 = $_POST['a4']; //citacion

		$result="DELETE FROM HBOFidelizacion WHERE codigo_bd='$a1' AND cedula='$a2' AND nombre='$a3' AND nm_citacion='$a4'";  
		$row=mysqli_query($enlace,$result);
		echo '1';
			
    }else{
        echo '7';
    }
    mysqli_close($enlace);
?>