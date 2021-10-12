<?php
    session_start();
    include '../conexion_bd.php';
	
    $a1 = addslashes($_POST['a1']); //cedula
    $a2 = addslashes($_POST['a2']); //primer nombre
	$a3 = addslashes($_POST['a3']); //primer apellido
	$a4 = addslashes($_POST['a4']); //fecha nacimiento
    $a5 = addslashes($_POST['a5']); //telef convencional
	$a6 = addslashes($_POST['a6']); //direccion
	$a7 = addslashes($_POST['a7']); //rol
	$a8 = addslashes($_POST['a8']); //segundo nombre
	$a9 = addslashes($_POST['a9']); //segundo apellido
    $a10 = addslashes($_POST['a10']); //usuario
	$a11 = addslashes($_POST['a11']); //telef celular
	$a12 = addslashes($_POST['a12']); //persona contacto
    $a13 = addslashes($_POST['a13']); //telefono persona contacto
    $a14 = addslashes($_POST['a14']); //email
    $a15 = addslashes($_POST['a15']); //servicio

	 
    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
	
	if (empty($a1) or empty($a2) or empty($a3) or empty($a4) or empty($a6) or empty($a7) or empty($a10)){
    	echo '2';
	}else{
		//hacer la busqueda de cedula aqui
		$block = mysqli_query($enlace, "SELECT * FROM usuarios WHERE ci='$a1'");
		mysqli_data_seek ($block, 0);
		$row_block = mysqli_num_rows($block);
		if ($row_block >= 1){
			echo '3';
		}else{
			$block2 = mysqli_query($enlace, "SELECT * FROM usuarios WHERE usuario='$a10'");
			mysqli_data_seek ($block2, 0);
			$row_block2 = mysqli_num_rows($block2);
			if ($row_block2 >= 1){
				echo '4';
			}else{
				$result="INSERT INTO usuarios (rol,1er_nombre,2do_nombre,1er_apellido,2do_apellido,ci,fecha_cum,usuario,clave,activo,direccion, telf_convencional, telf_celular, persona_cont, telf_pers_con, servicio) VALUES ('$a7','$a2','$a8','$a3','$a9','$a1','$a4','$a10',MD5('$a1'),'0','$a6','$a5','$a11','$a12','$a13','$a15')";  
				$row=mysqli_query($enlace,$result);
				echo '1';
			}
		}
	}
    mysqli_close($enlace);
?>