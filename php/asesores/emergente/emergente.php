<?php
    session_start();
    include '../../conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //nombre
        $a2 = addslashes($_POST['a2']); //apellidos
    	$a3 = addslashes($_POST['a3']); //cedula
    	$a4 = addslashes($_POST['a4']); //provincia
    	$a5 = addslashes($_POST['a5']); //ciudad
        $a6 = addslashes($_POST['a6']); //convencional
    	$a7 = addslashes($_POST['a7']); //celular
    	$a8 = addslashes($_POST['a8']); //correo
    	$a9 = addslashes($_POST['a9']); //producto
        $a10 = addslashes($_POST['a10']); //dummy
    	$a11 = addslashes($_POST['a11']); //observacion

        $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
		
        $result="INSERT INTO emergentes (id_user,fecha_carga,nombres,apellidos,cedula,provincia,localidad,convencional,celular,correo,producto,dummy,observacion) VALUES ('{$_SESSION['id']}',NOW(), upper('$a1'),upper('$a2'),'$a3',upper('$a4'),upper('$a5'),'$a6','$a7',upper('$a8'),upper('$a9'),'$a10',upper('$a11'))";  
		$row=mysqli_query($enlace,$result);
		echo '1';

    }else{
        echo '7';
    }
    mysqli_close($enlace);
?>