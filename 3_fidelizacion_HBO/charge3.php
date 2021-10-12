<?php
    session_start();
    include '../php/conexion_bd.php';

    $block2 = mysqli_query($enlace, "SELECT count(*) FROM HBOFidelizacion WHERE cod_vendedor='{$_SESSION['id']}' and cod_venta=5");
	mysqli_data_seek ($block2, 0);
	$row2 = mysqli_fetch_array($block2);
	
    echo $row2[0];
	
    mysqli_close($enlace);
?>