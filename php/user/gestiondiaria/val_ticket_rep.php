<?php
    session_start();
    include '../../conexion_bd.php';
	
    $a1 = addslashes($_POST['a1']); //user
    
    $bandera = 0;
    
    $block = mysqli_query($enlace, "SELECT omnicanal, estado FROM gestion WHERE omnicanal='$a1'");
	mysqli_data_seek ($block, 0);
	$row_block = mysqli_num_rows($block);
    
    if ($row_block >= 1){
      $sql="SELECT omnicanal, estado FROM gestion WHERE omnicanal='$a1'";  
	  $resS=mysqli_query($enlace,$sql);
	  while ($fila = mysqli_fetch_array($resS)){
	      if ($bandera == 0){
    	      if ($fila[1] == 1 || $fila[1] == 3 || $fila[1] == 4 || $fila[1] == 5){
    	         echo '1';
    	         $bandera = 1;
    	      }
	      }
	  }
    }else {
      echo '2';
    }

    mysqli_close($enlace);
?>