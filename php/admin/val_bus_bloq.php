<?php
    session_start();
    include '../conexion_bd.php';
	
    $a1 = addslashes($_POST['a1']); //user
	 
    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
	
	if (empty($a1)){
    	echo '4';
	}else{
		$block = mysqli_query($enlace, "SELECT * FROM usuarios WHERE id='$a1'");
		mysqli_data_seek ($block, 0);
		$row_block = mysqli_num_rows($block);
		if ($row_block >= 1){
			$sql="SELECT activo FROM usuarios WHERE id='$a1'";  
			$resS=mysqli_query($enlace,$sql);
			$fila = mysqli_fetch_array($resS);
				echo $fila['activo'];
		} else{ echo '4';  } 
	} 	
    mysqli_close($enlace);
?>