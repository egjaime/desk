<?php
    session_start();
    include '../../conexion_bd.php';
	
    $a1 = addslashes($_POST['a1']); //id
    $a2 = addslashes($_POST['a2']); //omnicanal
    
    $block = mysqli_query($enlace, "SELECT omnicanal, estado FROM gestion WHERE omnicanal='$a2' AND pendiente='0'");
	mysqli_data_seek ($block, 0);
	$row_block = mysqli_num_rows($block);
	
	if ($row_block >= 1){
      $sql="SELECT omnicanal, estado FROM gestion WHERE omnicanal='$a2' AND pendiente='0'";  
	  $resS=mysqli_query($enlace,$sql);
	  while ($fila = mysqli_fetch_array($resS)){
	      if ($fila[1] == 1 || $fila[1] == 3 || $fila[1] == 4 || $fila[1] == 5){
	         echo '2';
	      }else{
	          $result = "UPDATE gestion SET omnicanal='$a2', pendiente='0' WHERE id='$a1' AND id_usuario={$_SESSION['id']}";
        	  $row=mysqli_query($enlace,$result);
              echo '1';
	      }
	  }
    }else{
      $result = "UPDATE gestion SET omnicanal='$a2', pendiente='0' WHERE id='$a1' AND id_usuario={$_SESSION['id']}";
	  $row=mysqli_query($enlace,$result);
      echo '1';
    }
	 
    mysqli_close($enlace);
?>