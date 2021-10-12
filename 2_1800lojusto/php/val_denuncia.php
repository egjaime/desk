<?php
    session_start();
    include '../../php/conexion_bd.php';
    
    date_default_timezone_set("America/Guayaquil");
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //producto
        $a2 = addslashes($_POST['a2']); //tipo_denuncia
    	$a3 = addslashes($_POST['a3']); //denunciado
    	$a4 = addslashes($_POST['a4']); //detail_denuncia
        $a5 = addslashes($_POST['a5']); //provincia
    	$a6 = addslashes($_POST['a6']); //localidad
    	$a7 = addslashes($_POST['a7']); //dir
    	$a9 = addslashes($_POST['a9']); //name_denunciante
    	$a10 = addslashes($_POST['a10']); //telf1
    	$a11 = addslashes($_POST['a11']); //email

        $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
        
        if(empty($a1) || empty($a2) || empty($a3) || empty($a4) || empty($a5) || empty($a6) || empty($a7) || empty($a9) || empty($a10) || empty($a11)) {
            echo 'e_2';
        }else{
            $result="INSERT INTO 1800LoJusto (id_user,fecha_registro ,hora, producto,tipo_denuncia,denunciado,detalle_denuncia,provincia,canton,direccion_denunciado,denunciante,telefono,correo) VALUES ('{$_SESSION['id']}',NOW(),NOW(),upper('$a1'),upper('$a2'),upper('$a3'),upper('$a4'),upper('$a5'),upper('$a6'),upper('$a7'),upper('$a9'),upper('$a10'),upper('$a11'))";  
    		$row=mysqli_query($enlace,$result);
    		
    		$block = mysqli_query($enlace, "SELECT MAX(id_denuncia) AS id FROM 1800LoJusto WHERE id_user='{$_SESSION['id']}'");
			mysqli_data_seek ($block, 0);
			while($rows=mysqli_fetch_array($block)){
			    echo $rows['id'];
			}
        }
		
    }else{
        echo 'e_7';
    }
    mysqli_close($enlace);
?>