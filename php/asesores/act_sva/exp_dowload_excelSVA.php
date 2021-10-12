<?php
    error_reporting(0);
    session_start();
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Reporte_gestion_SVA.xls");

    include_once '../../conexion_bd.php';
    
    $a1 = "";
    $a2 = "";
    $a3 = "";

    $a1 = $_GET['a19']; //fecha 1
    $a2 = $_GET['a22']; //fecha 2
    $a3 = $_GET['a33']; //usuario
    
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
    <td colspan="4" bgcolor="skyblue"><CENTER><strong>Bitacora de Activaciones SVA</strong></CENTER></td>
  </tr> 

  <tr style="color:#000000; text-align:center; ">
		<th>Usuario</th>
		<th>Fecha</th>
		<th>Paquete</th>
		<th>Num. Servicio</th>
		<th>Telf. Contacto</th>
	</tr>
  
<?php

    $block = mysqli_query($enlace, "SELECT usuario, fecha_act, paquete, contrato FROM act_sva WHERE id_usuario=$a3 AND fecha_act BETWEEN '$a1' AND '$a2'"); 
	mysqli_data_seek ($block, 0);
	while($res=mysqli_fetch_array($block)){

	$usuario=$res[0];
	$fecha_act=$res[1];
	$paquete=$res[2];
	$contrato=$res[3];
	$telf=$res[4];

?>
  <tr style="text-align:left;">
    <td style="width:110px; text-align:center;"><?php echo $usuario; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $fecha_act; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $paquete; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $contrato; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $telf; ?></td>
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
   