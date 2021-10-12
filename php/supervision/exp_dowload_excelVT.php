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
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prueba</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="9" bgcolor="skyblue"><CENTER><strong>Reporte de Gestion VT - Desde: <?php echo $a4; ?> Hasta: <?php echo $a5; ?> </strong></CENTER></td>
  </tr>
  <tr style="color:#000000; text-align:center; ">
		<th>Asesor</th>
		<th>usuario open</th>
		<th>Fecha de llamada</th>
		<th>Cédula/RUC Cliente</th>
		<th>Daño</th>
		<th>N° Reclamo</th>
		<th>Armario</th>
		<th>Virtual</th>
		<th>Observación</th>
	</tr>
  
<?php
    if($a3 == '-1'){
       $block = mysqli_query($enlace, "SELECT CONCAT(u.1er_nombre,' ', u.1er_apellido) As Asesor, gvt.usuario, g.fecha_call, g.cedula, gvt.tipo_danio, gvt.num_reclamo, gvt.armario, gvt.virtual, g.observacion FROM gestion_vt gvt INNER JOIN usuarios u ON u.id=gvt.id_usuario INNER JOIN gestion g ON g.id=gvt.id_gestion WHERE fecha_call BETWEEN '$a4' AND '$a5'"); 
    }else{
       $block = mysqli_query($enlace, "SELECT CONCAT(u.1er_nombre,' ', u.1er_apellido) As Asesor, gvt.usuario, g.fecha_call, g.cedula, gvt.tipo_danio, gvt.num_reclamo, gvt.armario, gvt.virtual, g.observacion FROM gestion_vt gvt INNER JOIN usuarios u ON u.id=gvt.id_usuario INNER JOIN gestion g ON g.id=gvt.id_gestion WHERE fecha_call BETWEEN '$a4' AND '$a5' AND gvt.id_usuario='$a3'");
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
    <?php if ($omnicanal === "1"){?>
	    <td>Alineación de antena</td> 
	<?php }else if ($omnicanal === "2"){ ?>
	    <td>Falla cable RCA/HDMI/Poder</td>
	<?php }else if ($omnicanal === "3"){ ?>
	    <td>Falla cable coaxial</td>
	<?php }else if ( $omnicanal === "4"){ ?>
	    <td>Parametros en cero</td>
	<?php }else if ($omnicanal=== "5"){ ?>
	    <td>Posible deco dañado</td> 
	<?php }else if ($omnicanal === "6"){ ?>
	    <td>CNRP - Sin Señal</td>
	<?php }else if ($omnicanal === "7"){ ?>
	    <td>Daño LNB</td>
	<?php } ?>
    <td style="width:110px; text-align:center;"><?php echo $estado; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $cedula; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $observacion; ?></td>
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
   