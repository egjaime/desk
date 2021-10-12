<?php
    session_start();
    include '../../conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //cedula
        $a2 = addslashes($_POST['a2']); //virtual
    	$a3 = addslashes($_POST['a3']); //omnicanal
    	$a4 = addslashes($_POST['a4']); //nombre
        $a5 = addslashes($_POST['a5']); //telefono 1
    	$a6 = addslashes($_POST['a6']); //telefono 2
    	$a7 = addslashes($_POST['a7']); //observacion
    	$a8 = addslashes($_POST['a8']); //provincia
    	$a9 = addslashes($_POST['a9']); //localidad

        $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    	
    	if (empty($a1) or empty($a2) or empty($a3) or empty($a4) or empty($a5) or empty($a8) or empty($a9)){
        	echo '2';
    	}else{
    		$result="INSERT INTO escalar_vt (id_usuario,cedula,virtual,open,nombre,telf1,telf2,observacion, id_provincia, id_localidad) VALUES ('{$_SESSION['id']}','$a1','$a2','$a3','$a4','$a5','$a6',upper('$a7'),'$a8','$a9')";  
    		$row=mysqli_query($enlace,$result);
    		echo '1';
    	}
    }else{
        echo '<script language =  javascript>  self.location = "index.php" </script>';
    }
    mysqli_close($enlace);
?>