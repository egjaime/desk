<?php
    error_reporting(0);
    session_start();
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Reporte_gestion.xls");

    include_once '../conexion_bd.php';
    
    $a1 = "";
    $a2 = "";
    $a3 = "";

    $a1 = $_GET['a19']; //fecha 1
    $a2 = $_GET['a22']; //fecha 2
    $a3 = $_GET['a33']; //usuario
    
    $a4 = substr($a1, 0,4) . "-" . substr($a1, 4,2) . "-" . substr($a1, 6,2);
    
    $a5 = substr($a2, 0,4) . "-" . substr($a2, 4,2) . "-" . substr($a2, 6,2);

    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    

    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

<title>Prueba</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="9" bgcolor="skyblue"><CENTER><strong>Reporte de llamadas Sin Audio - Desde: <?php echo $a4; ?> Hasta: <?php echo $a5; ?> </strong></CENTER></td>
  </tr>
  <tr style="color:#000000; text-align:center; ">
				<th>Asesor</th>
				<th>usuario genesis</th>
				<th>Id llamada</th>
				<th>Anillamador</th>
				<th>Fecha llamada</th>
				<th>Hora inicio</th>
				<th>Hora Cierre</th>
				<th>Motivo de cierre</th>
				<th>Observacion</th>
	</tr>
  
<?php
    if($a3 == '-1'){
       $block = mysqli_query($enlace, "SELECT CONCAT(u.1er_nombre,' ', u.1er_apellido) As Asesor, gvt.user_genesis, gvt.id_genesis, g.anillamador, g.fecha_call, g.hora_inicio, gvt.hora_cierre, gvt.motivo_cierre, g.observacion FROM gestion_sa gvt INNER JOIN usuarios u ON u.id=gvt.id_usuario INNER JOIN gestion g ON g.id=gvt.id_gestion WHERE fecha_call BETWEEN '$a4' AND '$a5'"); 
    }else{
       $block = mysqli_query($enlace, "SELECT CONCAT(u.1er_nombre,' ', u.1er_apellido) As Asesor, gvt.user_genesis, gvt.id_genesis, g.anillamador, g.fecha_call, g.hora_inicio, gvt.hora_cierre, gvt.motivo_cierre, g.observacion FROM gestion_sa gvt INNER JOIN usuarios u ON u.id=gvt.id_usuario INNER JOIN gestion g ON g.id=gvt.id_gestion WHERE fecha_call BETWEEN '$a4' AND '$a5' AND gvt.id_usuario='$a3'");
    }
	mysqli_data_seek ($block, 0);
	while($res=mysqli_fetch_array($block)){

	$ani=$res[0];
	$fecha=$res[1];
	$hora=$res[2];
	$tmo=$res[3];
	$omnicanal=$res[4];
	$estado=$res[5];
	$cedula=$res[6];
	$observacion=$res[7];
	$observacion2=$res[8];

?>
  <tr style="text-align:left;">
    <td style="width:110px; text-align:center;"><?php echo $ani; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $fecha; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $hora; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $tmo; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $omnicanal; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $estado; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $cedula; ?></td>
    	<?php if ($observacion === "1"){?>
		   <td>Desconexión Remota</td> 
		<?php }else if ($observacion === "2"){ ?>
		   <td>Desconexión Local</td>
		<?php }else if ($observacion === "3"){ ?>
		   <td>Otro..</td>
		<?php } ?>
    <td style="width:350px;"><?php echo $observacion2; ?></td>
  </tr>
  <?php
}
  ?>
</table>
</body>
</html>
  <?php
mysqli_close($enlace);
  ?>
   