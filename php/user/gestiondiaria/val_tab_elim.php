<?php
    session_start();
    include '../../conexion_bd.php';
	
    $a1 = addslashes($_POST['a1']); //user
	 
	$result = "DELETE FROM gestion WHERE id='$a1' AND id_usuario={$_SESSION['id']}";
	$row=mysqli_query($enlace,$result);
	
	//valido si existe
	$block = mysqli_query($enlace, "SELECT count(*) as total FROM gestion_vt WHERE id_gestion='$a1'");
    mysqli_data_seek ($block, 0);
    $res=mysqli_fetch_array($block);
    
    $block2 = mysqli_query($enlace, "SELECT count(*) as total FROM gestion_sa WHERE id_gestion='$a1'");
    mysqli_data_seek ($block2, 0);
    $res2=mysqli_fetch_array($block2);
    
    if($res['total'] == '1'){
      $result = "DELETE FROM gestion_vt WHERE id_gestion='$a1'";
	  $row=mysqli_query($enlace,$result); 
    }else if(($res2['total'] == '1')){
      $result = "DELETE FROM gestion_sa WHERE id_gestion='$a1'";
	  $row=mysqli_query($enlace,$result);
    }

	echo '1';
    mysqli_close($enlace);
?>