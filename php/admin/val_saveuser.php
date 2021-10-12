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

	 
    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
	
	if (empty($a1) or empty($a2) or empty($a3) or empty($a4) or empty($a6) or empty($a7) or empty($a10)or empty($a14)){
    	echo '2';
	}else{
		$result="UPDATE usuarios SET rol='$a7',1er_nombre='$a2',2do_nombre='$a8',1er_apellido='$a3',2do_apellido='$a9',ci='$a1',fecha_cum='$a4',usuario='$a10',direccion='$a6', telf_convencional='$a5', telf_celular='$a11', persona_cont='$a12', telf_pers_con='$a13', email='$a14' WHERE ci='$a1' AND usuario='$a10'"; 
		$row=mysqli_query($enlace,$result);
		echo '1';
	} 	
   mysqli_close($enlace);
?>