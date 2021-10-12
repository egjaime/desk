<?php
    session_start();
    include 'conexion_bd.php';
	
    $usuario = addslashes($_POST['user']);
    $pass = addslashes($_POST['pass']);
	
    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
	
    $result = mysqli_query($enlace, "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave=MD5('$pass')");
	mysqli_data_seek ($result, 0);
	$row_cnt = mysqli_num_rows($result);
	
	//valido si el usuario está bloqueado
	if($row_cnt == 1){
		$block = mysqli_query($enlace, "SELECT * FROM usuarios WHERE activo=3 and usuario='$usuario'");
		mysqli_data_seek ($block, 0);
		$row_block = mysqli_num_rows($block);
		if ($row_block == 1){
			echo '3';
		}else{
			//capturo informacion del usuario
			$sql="SELECT ci, id, rol, 1er_nombre, 1er_apellido, DAY(fecha_cum), MONTH(fecha_cum), servicio FROM usuarios WHERE usuario='$usuario'";  
            $resS=mysqli_query($enlace,$sql);
			$fila = mysqli_fetch_array($resS);
				
			$_SESSION['id'] = $fila['id'];
            $_SESSION['nivel'] = $fila['rol'];
            $_SESSION['servicio'] = $fila['servicio'];
			//FECHA DE CUMPLE
			$array = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
			$num = $fila['MONTH(fecha_cum)'];
			$mes = $array[$num-1];
			$_SESSION['cumple']=" ".$fila['DAY(fecha_cum)']." de ".$mes;
			//CONCATENAR NOMBRE
			$_SESSION['nombre']=" ".$fila['1er_nombre']." ".$fila['1er_apellido'];
			//CONCATENAR RUTA IMAGEN
			$_SESSION['ruta']="assets/dist/img/".$fila['ci'].".png";
			
			$trx0="update usuarios set activo=0 where usuario='$usuario'";  
		    $res0=mysqli_query($enlace,$trx0);
		    
		    $trx2="update usuarios set last_log=NOW() where usuario='$usuario'";  
		    $res2=mysqli_query($enlace,$trx2);
			
			echo '2';
		}
	}else{
		    //si la contraseña es incorrecta validado que sean 3 veces incorrecto antes de bloquear
			$trx="SELECT activo FROM usuarios WHERE usuario='$usuario'";  
			$resB=mysqli_query($enlace,$trx);
			$filaB = mysqli_fetch_array($resB);
			if ($filaB['activo'] == 3){
			    echo '3';
		    }else{
				$trx2="update usuarios set activo=activo+1 where usuario='$usuario'";  
		    	$res2=mysqli_query($enlace,$trx2);
				
				$trx4="SELECT activo FROM usuarios WHERE usuario='$usuario'";  
				$resC=mysqli_query($enlace,$trx4);
				$filaC = mysqli_fetch_array($resC);
				if ($filaC['activo'] == 3){
					echo '3';
				}else{
				    echo '1';
				}
			}
	}

	mysqli_free_result($result);

  
?>