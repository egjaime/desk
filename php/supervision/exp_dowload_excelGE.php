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
    
    if($a3 == '-1'){
       $block = mysqli_query($enlace, "SELECT count(*) as total FROM gestion g INNER JOIN usuarios u ON u.id=g.id_usuario WHERE g.fecha_call BETWEEN '$a1' AND '$a2'"); 
    }else{
       $block = mysqli_query($enlace, "SELECT count(*) as total FROM gestion g INNER JOIN usuarios u ON u.id=g.id_usuario WHERE g.fecha_call BETWEEN '$a1' AND '$a2' AND g.id_usuario='$a3'");
    }
	mysqli_data_seek ($block, 0);
	while($res=mysqli_fetch_array($block)){
	    $a10 = $res[0];
	}
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prueba</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="8" bgcolor="skyblue"><CENTER><strong>Bitacora de asesores - Desde: <?php echo $a4; ?> Hasta: <?php echo $a5; ?> </strong></CENTER></td>
  </tr> 
  <tr>
    <td colspan="8" bgcolor="skyblue"><CENTER><strong> Cantidad de registros: <?php echo $a10; ?> </strong></CENTER></td>
  </tr>
  <tr style="color:#000000; text-align:center; ">
		<th>Asesor</th>
		<th>Usuario genesis</th>
		<th>Cedula/RUC cliente</th>
		<th>Anillamador</th>
		<th>Fecha de llamada</th>
		<th>Omnicanal</th>
		<th>Estado</th>
		<th>Observacion</th>
	</tr>
  
<?php
    if($a3 == '-1'){
       $block = mysqli_query($enlace, "SELECT CONCAT(u.1er_nombre,' ', u.1er_apellido) As Asesor, u.usuario, g.cedula, g.anillamador, g.fecha_call, g.omnicanal, g.estado, g.observacion FROM gestion g INNER JOIN usuarios u ON u.id=g.id_usuario WHERE g.fecha_call BETWEEN '$a1' AND '$a2'"); 
    }else{
       $block = mysqli_query($enlace, "SELECT CONCAT(u.1er_nombre,' ', u.1er_apellido) As Asesor, u.usuario, g.cedula, g.anillamador, g.fecha_call, g.omnicanal, g.estado, g.observacion FROM gestion g INNER JOIN usuarios u ON u.id=g.id_usuario WHERE g.fecha_call BETWEEN '$a1' AND '$a2' AND g.id_usuario='$a3'");
    }
	mysqli_data_seek ($block, 0);
	while($res=mysqli_fetch_array($block)){

	$ani=$res[0];
	$fecha=$res[1];
	$hora=$res[2];
	$tmo=$res[3];
	$omnicanal=$res[4];
	$cedula=$res[5];
	$estado=$res[6];
	$observacion=$res[7];

?>
  <tr style="text-align:left;">
    <td style="width:110px; text-align:center;"><?php echo $ani; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $fecha; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $hora; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $tmo; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $omnicanal; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $cedula; ?></td>
    	<?php if ($estado === "1"){?>
		   <td style="width:110px; text-align:center;">Resuelto</td> 
		<?php }else if ($estado === "2"){ ?>
		   <td style="width:110px; text-align:center;">Interaccion</td>
		<?php }else if ($estado === "3"){ ?>
		   <td style="width:110px; text-align:center;">Escalado N2</td>
		<?php }else if ($estado === "4"){ ?>
		   <td style="width:110px; text-align:center;">Escalado VT</td>
		<?php }else if ($estado === "5"){ ?>
		   <td style="width:110px; text-align:center;">Sin audio / Caida</td> 
		<?php }else if ($estado === "6"){ ?>
		   <td style="width:110px; text-align:center;">Guia Teléfonica</td>
		<?php } ?>
    <td style="width:400px;"><?php echo $observacion; ?></td>
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
   