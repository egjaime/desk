<?php
//ESTO ESTA PARA NFORMACION QUE PIDA CNT DE ENCUESTAS DE ULTIMA HORA
    session_start();
    include 'conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
        $a1 = addslashes($_POST['a3']); //supercopa ecuador


		$result="INSERT INTO tmp_ppv (id_usuario, respuesta,fecha, hora) VALUES ('{$_SESSION['id']}','$a1',NOW(), NOW())";  
		$row=mysqli_query($enlace,$result);
		echo '1';
    }else{
        echo '7';
    }
    mysqli_close($enlace);
?>