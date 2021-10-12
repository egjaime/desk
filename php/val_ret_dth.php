<?php
//ESTO ESTA PARA NFORMACION QUE PIDA CNT DE ENCUESTAS DE ULTIMA HORA
    session_start();
    include 'conexion_bd.php';
    
   if(!empty($_SESSION['id'])){ 
        $a1 = addslashes($_POST['a1']); //nombre
        $a2 = addslashes($_POST['a2']); //numero vrtual
        $a3 = addslashes($_POST['a3']); //plan
        $a4 = addslashes($_POST['a4']); //anilla
        $a5 = addslashes($_POST['a5']); //cedula
        $a6 = addslashes($_POST['a6']); //contrato
        $a7 = addslashes($_POST['a7']); //beneficio
        $a8 = addslashes($_POST['a8']); //observacion

		$result="INSERT INTO tmp_retdth (id_user,fecha_ingreso,cliente,numero_virtual,plan_actual,anipagador,cedula_ruc,contrato,beneficio,observacion) VALUES ('{$_SESSION['id']}',NOW(),upper('$a1'),'$a2','$a3','$a4','$a5','$a6','$a7',upper('$a8'))";  
		$row=mysqli_query($enlace,$result);
		echo '1';
    }else{
        echo '7';
    }
    mysqli_close($enlace);
?>