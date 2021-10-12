<?php
    session_start();
    include 'conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
    
    $camp1 = addslashes($_POST['a1']);
    $camp2 = addslashes($_POST['a2']);
    $camp3 = addslashes($_POST['a3']);
    $camp4 = addslashes($_POST['a4']);
    $camp5 = addslashes($_POST['a5']);
    $camp6 = addslashes($_POST['a6']);

	$result="INSERT INTO tmp_ppv3 (id_usuario, cedula, nombre, contrato, fecha, user_open, sva, hora) VALUES ('{$_SESSION['id']}','$camp1',upper('$camp2'),'$camp3','$camp4',upper('$camp5'),upper('$camp6'), NOW())";  
	$row=mysqli_query($enlace,$result);

	//consulto el registro del usuario:
	
	$sql="SELECT MAX(id) FROM tmp_ppv3 WHERE `id_usuario`='{$_SESSION['id']}'";  
    $resS=mysqli_query($enlace,$sql);
	$fila = mysqli_fetch_array($resS);
	
	echo $fila['MAX(id)'];

    }else{
            echo '<script language =  javascript>  alert("Sesión Caducada. Ticket NO registrado."); self.location = "../../index.php"; </script>';
    }

    mysqli_close($enlace);
?>