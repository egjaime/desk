<?php
    session_start();
    include '../conexion_bd.php';
	
    $a1 = addslashes($_POST['a1']);//tmo 
	$a2 = addslashes($_POST['a2']);//ns
	$a3 = addslashes($_POST['a3']);//ad
	$a4 = addslashes($_POST['a4']);//co
	$a5 = addslashes($_POST['a5']);//pa
	$a6 = addslashes($_POST['a6']);//cl
	$a7 = addslashes($_POST['a7']);//meta_tmo
	$a8 = addslashes($_POST['a8']);//meta_ns
	$a9 = addslashes($_POST['a9']);//meta_ad
	$a10 = addslashes($_POST['a10']);//meta_co
	$a11 = addslashes($_POST['a11']);//meta_pa
	$a12 = addslashes($_POST['a12']);//meta_cl
	
	date_default_timezone_set("America/Guayaquil");
    $date_now = date('d/m/Y');
	
    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
	
	if (empty($a1) || empty($a2) || empty($a3) || empty($a4) || empty($a5) || empty($a6) || empty($a7)  || empty($a8)  || empty($a9)  || empty($a10)  || empty($a11)  || empty($a12)){
    	echo '2';
	}else{
		$result="UPDATE datos_operativos SET fecha='$date_now', tmo='$a1', meta_tmo='$a7', ns='$a2', meta_ns='$a8', adherencia='$a3', meta_adherencia='$a9', convertibilidad='$a4', meta_convertib='$a10', participacion='$a5', meta_participa='$a11', cierre='$a6', meta_cierre='$a12' WHERE id=1";  
		$row=mysqli_query($enlace,$result);
		echo '1';
	} 	
    mysqli_close($enlace);
?>