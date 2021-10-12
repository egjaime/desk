<?php
    session_start();
    include '../conexion_bd.php';
	
    $pass1 = addslashes($_POST['passAct']);
    $pass2 = addslashes($_POST['newpass1']);
	$pass3 = addslashes($_POST['newpass2']);
	$id = $_SESSION['id'];
	 
    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
	
	if (empty($pass1) or empty($pass2) or empty($pass3)){
    	echo '1';
	}elseif($pass2 != $pass3){
	    echo '2';
	}elseif(strlen($pass2) > 12 or strlen($pass3) > 12 or strlen($pass2) < 8 or strlen($pass3) < 8){
	    echo '3';
	}elseif($pass1 == $pass3){
	    echo '7';
	}else{
		$result = mysqli_query($enlace, "SELECT * FROM usuarios WHERE id='$id' AND clave=MD5('$pass1')");
		mysqli_data_seek ($result, 0);
		$row_cnt = mysqli_num_rows($result);
		if ($row_cnt == 1){
			$sql="UPDATE usuarios SET clave=MD5('$pass2') WHERE id='$id' AND clave=MD5('$pass1')";  
            $resS=mysqli_query($enlace,$sql);
			
			$trx0="update usuarios set activo=0 where WHERE id='$id'";  
		    $res0=mysqli_query($enlace,$trx0);
			
			echo '5';
		}else{
			$trx2="update usuarios set activo=activo+1 where id='$id'";  
		    $res2=mysqli_query($enlace,$trx2);
			
			$trx4="SELECT activo FROM usuarios WHERE id='$id'";  
			$resC=mysqli_query($enlace,$trx4);
			$filaC = mysqli_fetch_array($resC);
			if ($filaC['activo'] == 3){
				session_destroy(); //elimina todas la variables de sesión registradas.
				echo '6';	
			}else{
			    echo '4';
			}
		}
	}
    mysqli_close($enlace);
?>