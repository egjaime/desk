<?php
    error_reporting(0);
    session_start();
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Reporte_gestion_HBO_Impulsa.xls");

    include_once '../../../php/conexion_bd.php';
    
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
    <td colspan="12" bgcolor="skyblue"><CENTER><strong>Reporte de Ventas HBO - Desde: <?php echo $a4; ?> Hasta: <?php echo $a5; ?> </strong></CENTER></td>
  </tr>
  <tr style="color:#000000; text-align:center; ">
				<th>Codigo BD</th>
				<th>Codigo Excel</th>
				<th>Cédula</th>
				<th>Cliente</th>
				<th>Estado de Venta</th>
				<th>Fecha de atención</th>
				<th>Fecha de Agendamiento</th>
				<th>Hora de Agendamiento</th>
				<th>Cantidad de Contactos</th>
				<th>Vendedor</th>
				<th>Motivo No desea</th>
				<th>Observacion</th>
	</tr>
  
<?php
    if($a3 == '-1'){
        
       $block = mysqli_query($enlace, "SELECT `codigo_bd`,`codigo_excel`,`cedula`,`nombre`,`estado_venta`,`fecha_atencion`,`fecha_agendamiento`,`hora_agendamiento`,`cant_contactos`, CONCAT(u.1er_nombre,' ', u.1er_apellido) As Vendedor, `motivo_no_desea`,`observacion` FROM HBOFidelizacion hbo INNER JOIN usuarios u ON u.id=hbo.cod_vendedor WHERE `fecha_atencion` BETWEEN '$a4' AND '$a5'"); 
    }else{
       $block = mysqli_query($enlace, "SELECT `codigo_bd`,`codigo_excel`,`cedula`,`nombre`,`estado_venta`,`fecha_atencion`,`fecha_agendamiento`,`hora_agendamiento`,`cant_contactos`, CONCAT(u.1er_nombre,' ', u.1er_apellido) As Vendedor, `motivo_no_desea`,`observacion` FROM HBOFidelizacion hbo INNER JOIN usuarios u ON u.id=hbo.cod_vendedor WHERE `fecha_atencion` BETWEEN '$a4' AND '$a5' AND hbo.cod_vendedor='$a3'");
    }
	mysqli_data_seek ($block, 0);
	while($res=mysqli_fetch_array($block)){

	$res1=$res[0];
	$res2=$res[1];
	$res3=$res[2];
	$res4=$res[3];
	$res5=$res[4];
	$res6=$res[5];
	$res7=$res[6];
	$res8=$res[7];
	$res9=$res[8];
	$res10=$res[9];
	$res11=$res[10];
	$res12=$res[11];
	$res13=$res[12];

?>
  <tr style="text-align:left;">
    <td style="width:110px; text-align:center;"><?php echo $res1; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res2; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res3; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res4; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res5; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res6; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res7; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res8; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res9; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res10; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res11; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res12; ?></td>
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
   