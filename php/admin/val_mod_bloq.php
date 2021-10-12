<?php
    session_start();
    include '../conexion_bd.php';
	
    $a1 = addslashes($_POST['a2']); //user
	$a3 = addslashes($_POST['a3']); //block
	
    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
	
	if (empty($a1)){
    	echo '1';
	}else{
		$block = mysqli_query($enlace, "SELECT * FROM usuarios WHERE id='$a1'");
		mysqli_data_seek ($block, 0);
		$row_block = mysqli_num_rows($block);
		if ($row_block >= 1){
			$result="UPDATE usuarios SET activo='$a3' WHERE id='$a1'";  
			$row=mysqli_query($enlace,$result);
			echo '2';
		}else{ echo '1';  } 
	} 	
    mysqli_close($enlace);
?>