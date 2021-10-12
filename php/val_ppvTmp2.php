<?php
//ESTO ESTA PARA NFORMACION QUE PIDA CNT DE ENCUESTAS DE ULTIMA HORA
    session_start();
    include 'conexion_bd.php';
    
    $camp1 = addslashes($_POST['a1']);
    $camp2 = addslashes($_POST['a2']);
    $camp3 = addslashes($_POST['a3']);
    
		$result="INSERT INTO tmp_ppv2 (id_usuario, virtual, contacto, motivo, fecha) VALUES ('{$_SESSION['id']}','$camp1','$camp2','$camp3', NOW())";  
		$row=mysqli_query($enlace,$result);
		echo '1';

    mysqli_close($enlace);
?>