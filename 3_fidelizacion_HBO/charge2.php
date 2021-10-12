<?php
    session_start();
    include '../php/conexion_bd.php';
    date_default_timezone_set("America/Guayaquil");
    $date_now =  date('Y-m-d');


    $block2 = mysqli_query($enlace, "SELECT count(*) FROM HBOFidelizacion WHERE cod_vendedor='{$_SESSION['id']}' and cod_venta=5 AND fecha_agendamiento='$date_now'");
	mysqli_data_seek ($block2, 0);
	$row2 = mysqli_fetch_array($block2);
	
    echo $row2[0];
	
    mysqli_close($enlace);
?>