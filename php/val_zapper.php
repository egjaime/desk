<?php
//ESTO ESTA PARA NFORMACION QUE PIDA CNT DE ENCUESTAS DE ULTIMA HORA
    session_start();
    include 'conexion_bd.php';
    
        $a1 = addslashes($_POST['a1']); //conversion zapper
        $a2 = addslashes($_POST['a2']); //cedula

		$result="INSERT INTO tmp_zap (id_usuario, opcion,fecha,cedula) VALUES ('{$_SESSION['id']}','$a1',NOW(),'$a2')";  
		$row=mysqli_query($enlace,$result);
		echo '1';

    mysqli_close($enlace);
?>