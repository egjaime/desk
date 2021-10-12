<?php
    session_start();
    include '../../../php/conexion_bd.php';
	
    $a1 = addslashes($_POST['a1']); //id
    $a2 = addslashes($_POST['a2']); //omnicanal
    
	$result = "UPDATE gestion_colega SET omnicanal='$a2', falla_omni='0' WHERE id='$a1' AND id_user={$_SESSION['id']}";
    $row=mysqli_query($enlace,$result);
    echo '1';
    
    mysqli_close($enlace);
?>