<?php
    session_start();
    include '../conexion_bd.php';
	
    $id = addslashes($_POST['ad1']);
    $pass2 = addslashes($_POST['ad2']);
	$pass3 = addslashes($_POST['ad3']);
	 
    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
	
	if (empty($id) or empty($pass2) or empty($pass3)){
    	echo '1';
	}elseif($pass2 != $pass3){
	    echo '2';
	}elseif(strlen($pass2) > 12 or strlen($pass3) > 12 or strlen($pass2) < 8 or strlen($pass3) < 8){
	    echo '3';
	}else{
		$result = mysqli_query($enlace, "SELECT * FROM usuarios WHERE id='$id'");
		mysqli_data_seek ($result, 0);
		$row_cnt = mysqli_num_rows($result);
		if ($row_cnt == 1){
			$sql="UPDATE usuarios SET clave=MD5('$pass2') WHERE id='$id'";  
            $resS=mysqli_query($enlace,$sql);
			echo '4';
		}else{
			echo '5';
		}
	}
    mysqli_close($enlace);
?>