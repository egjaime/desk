<?php
    session_start();
    include '../../php/conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
        $block5 = mysqli_query($enlace, "SELECT codigo_bd, cedula, nombre, placa, nm_citacion, fecha_citacion, hora_citacion, TIMESTAMPDIFF(DAY,`fecha_citacion`,NOW()) as dias_mora,valor,radar,telf,observacion  FROM HBOFidelizacion WHERE cod_venta = 9 and `cod_vendedor`='{$_SESSION['id']}' limit 1 ");
		mysqli_data_seek ($block5, 0);
		$row_block = mysqli_num_rows($block5);
		if ($row_block == 0){
		    
            $block = mysqli_query($enlace, "SELECT codigo_bd, cedula, nombre, placa, nm_citacion, fecha_citacion, hora_citacion, TIMESTAMPDIFF(DAY,`fecha_citacion`,NOW()) as dias_mora,valor,radar,telf,observacion FROM HBOFidelizacion WHERE cod_venta = 0 LIMIT 1");
        	mysqli_data_seek ($block, 0);
        	
        	$row_blockR = mysqli_num_rows($block);
		    if ($row_blockR == 0){
        	        $cadena = 'ntx_001_R';
        	}else{
            	while($ver=mysqli_fetch_array($block)){
            	    $a3 = $ver['0'];
            	    //actualizo el registro para que nadie mas lo utilice
            	    $sql = "UPDATE HBOFidelizacion SET  cod_venta=9, fecha_atencion=now(), hora_asignado=now(), cod_vendedor='{$_SESSION['id']}'  WHERE codigo_bd='$a3'";
                    $row=mysqli_query($enlace,$sql);
               	    $cadena = $ver['1'] ."$". $ver['2'] ."$". $ver['3'] ."$". $ver['4'] ."$". $ver['5'] ."$". $ver['6'] ."$". $ver['7'] ."$". $ver['8'] ."$". $ver['9']  ."$". $ver['10'] ."$". $ver['11'];
               	    $_SESSION['id_hbo'] = $ver['0'];
         
               	}
        	}
        	echo $cadena;
		}else{
		    
		    $block = mysqli_query($enlace, "SELECT codigo_bd, cedula, nombre, placa, nm_citacion, fecha_citacion, hora_citacion,TIMESTAMPDIFF(DAY,`fecha_citacion`,NOW()) as dias_mora,valor,radar,telf,observacion FROM HBOFidelizacion WHERE  cod_venta = 9 and `cod_vendedor`='{$_SESSION['id']}' LIMIT 1");
        	mysqli_data_seek ($block, 0);
        	while($ver=mysqli_fetch_array($block)){
        	    $a3 = $ver['0'];
        	    //actualizo el registro para que nadie mas lo utilice
        	    $sql = "UPDATE HBOFidelizacion SET  cod_venta=9, fecha_atencion=now(), cod_vendedor='{$_SESSION['id']}'  WHERE codigo_bd='$a3'";
                $row=mysqli_query($enlace,$sql);
           	    $cadena = $ver['1'] ."$". $ver['2'] ."$". $ver['3'] ."$". $ver['4'] ."$". $ver['5'] ."$". $ver['6'] ."$". $ver['7'] ."$". $ver['8'] ."$". $ver['9']  ."$". $ver['10'] ."$". $ver['11'];
           	    $_SESSION['id_hbo'] = $ver['0'];
           	}
        	echo $cadena;
		    
		}
    	
    }else{
        echo '<script language =  javascript>  self.location = "index.php" </script>';
    }
    mysqli_close($enlace);
?>