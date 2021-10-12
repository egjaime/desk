<?php
    session_start();
    include '../php/conexion_bd.php';
    
    $a1 = addslashes($_POST['a1']); //id
    
    $block2 = mysqli_query($enlace, "SELECT COUNT(*) as total  FROM retenciones WHERE id_user='{$_SESSION['id']}' AND estado=3");
	mysqli_data_seek ($block2, 0);
	$row2 = mysqli_fetch_array($block2);
	
    echo $row2[0];
	
    mysqli_close($enlace);
?>