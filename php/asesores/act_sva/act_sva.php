<?php
    session_start();
    include '../../conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //usuario open
        $a2 = addslashes($_POST['a2']); //fecha
    	$a3 = addslashes($_POST['a3']); //paquete
    	$a4 = addslashes($_POST['a4']); //numero de servicio
    	$a5 = addslashes($_POST['a5']); //telefono

    	
    	$bandera = 0;
    
        $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
		
        $result="INSERT INTO act_sva (id_usuario,usuario,fecha_act,paquete,ns_ser,telf_contacto) VALUES ('{$_SESSION['id']}',upper('$a1'),'$a2',upper('$a3'),'$a4','$a5')";  
		$row=mysqli_query($enlace,$result);
		echo '1';

			
    }else{
        echo '7';
    }
    mysqli_close($enlace);
?>