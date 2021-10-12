<?php
    session_start();
    include '../../conexion_bd.php';
    
    if(!empty($_SESSION['id'])){ 
	
        $a1 = addslashes($_POST['a1']); //provincia
        $cadena = "";
        $cadena1 = "<select id= 'localidad' onchange='pro_localidad();' class='form-control select2' style='width: 100%;' data-mask tabindex='4'><option selected='selected' value='' disabled>Seleccione..</option> ";
    
        $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    	
    	if (empty($a1)){
        	echo '2';
    	}else{
    		$block = mysqli_query($enlace, "SELECT id, localidad FROM localidad WHERE id_provincia = '$a1'");
    		mysqli_data_seek ($block, 0);
    		while($ver=mysqli_fetch_array($block)){
       		    $cadena = $cadena . "<option value=".$ver['0'].">" . $ver['1'] . "</option>" ;
       		}
    	}
    	echo $cadena1 . $cadena;
    }else{
        echo '<script language =  javascript>  self.location = "index.php" </script>';
    }
    mysqli_close($enlace);
?>