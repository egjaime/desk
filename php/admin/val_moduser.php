<?php
    session_start();
    include '../conexion_bd.php';
	
    $a1 = addslashes($_POST['c1']); //bandera
    $a2 = addslashes($_POST['c2']); //dato validador
	
	$cad = "";
	
    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
	$datos = array(); 
	if (empty($a2)){
    	echo '2';
	}else{
		if ($a1 == 1){ //cedula
			$block = mysqli_query($enlace, "SELECT * FROM usuarios WHERE ci='$a2'");
			mysqli_data_seek ($block, 0);
			$row_block = mysqli_num_rows($block);
			if ($row_block >= 1){
				$sql="SELECT rol, 1er_nombre, 2do_nombre, 1er_apellido, 2do_apellido, ci, fecha_cum, usuario, direccion, telf_convencional, telf_celular, persona_cont, telf_pers_con, email FROM usuarios WHERE ci='$a2'";  
				$resS=mysqli_query($enlace,$sql);
				$fila = mysqli_fetch_array($resS);
				
				for ($i = 0; $i < 14; $i++) {
					if (empty($fila[$i])){
						$fila[$i]="";
					}
					if($i == 0){
						$cad = $cad . $fila[$i];
					}else{
						$cad = $cad ."$$". $fila[$i];
					}
				}
				
				echo $cad;
				
			}else{
				echo '3';
			}
		}elseif($a1 == 2){ 	//usuario
			$block = mysqli_query($enlace, "SELECT * FROM usuarios WHERE id='$a2'");
			mysqli_data_seek ($block, 0);
			$row_block = mysqli_num_rows($block);
			if ($row_block >= 1){
				$sql="SELECT rol, 1er_nombre, 2do_nombre, 1er_apellido, 2do_apellido, ci, fecha_cum, usuario, direccion, telf_convencional, telf_celular, persona_cont, telf_pers_con, email FROM usuarios WHERE id='$a2'";  
				$resS=mysqli_query($enlace,$sql);
				$fila = mysqli_fetch_array($resS);
				
				for ($i = 0; $i < 14; $i++) {
					if (empty($fila[$i])){
						$fila[$i]="";
					}
					if($i == 0){
						$cad = $cad . $fila[$i];
					}else{
						$cad = $cad ."$$". $fila[$i];
					}
				}
				
				echo $cad;	
			}else{
					echo '3';
			} 
		}	
	}
    mysqli_close($enlace);
?>