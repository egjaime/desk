<?php
    session_start();
    include '../../conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //cedula
        $a2 = addslashes($_POST['a2']); //mail
    	$a3 = addslashes($_POST['a3']); //telf1
    	$a4 = addslashes($_POST['a4']); //nombre
        $a5 = addslashes($_POST['a5']); //rol
    	$a6 = addslashes($_POST['a6']); //telefono 2
    	$a7 = addslashes($_POST['a7']); //observacion

        $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    	
    	if (empty($a1) or empty($a2) or empty($a3) or empty($a4) or empty($a5)){
        	echo '2';
    	}else{
    		$result="INSERT INTO escalar_cntplay (id_usuario,correo,telef1,cedula,nombre,falla,telef2,observacion) VALUES ('{$_SESSION['id']}','$a2','$a3','$a1','$a4','$a5','$a6',upper('$a7'))";  
    		$row=mysqli_query($enlace,$result);
    		echo '1';
    	}
    }else{
        echo '<script language =  javascript>  self.location = "index.php" </script>';
    }
    mysqli_close($enlace);
?>