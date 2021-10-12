<?php
    session_start();
    include 'conexion_bd.php';
    
    $camp1 = addslashes($_POST['a1']);
    $camp2 = addslashes($_POST['a2']);

		$result="INSERT INTO tmp_ppv4 (id_user, cedula, queja, fecha_registro) VALUES ('{$_SESSION['id']}','$camp1','$camp2', NOW())";  
		$row=mysqli_query($enlace,$result);
		echo '1';

    mysqli_close($enlace);
?>