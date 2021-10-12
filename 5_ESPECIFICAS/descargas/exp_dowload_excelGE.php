<?php
    error_reporting(0);
    session_start();
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Reporte_gestion.xls");

    include_once '../../php/conexion_bd.php';
    
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
       $block = mysqli_query($enlace, "SELECT count(*) as total FROM retenciones g INNER JOIN usuarios u ON u.id=g.id_user WHERE g.fecha_hora BETWEEN '$a1' AND '$a2'"); 
    }else{
       $block = mysqli_query($enlace, "SELECT count(*) as total FROM retenciones g INNER JOIN usuarios u ON u.id=g.id_user WHERE g.fecha_hora BETWEEN '$a1' AND '$a2' AND g.id_user='$a3'");
    }
	mysqli_data_seek ($block, 0);
	while($res=mysqli_fetch_array($block)){
	    $a10 = $res[0];
	}
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

<title>Prueba</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" bgcolor="skyblue"><CENTER><strong>Bitacora de retenciones - Desde: <?php echo $a4; ?> Hasta: <?php echo $a5; ?> </strong></CENTER></td>
  </tr> 
  <tr>
    <td colspan="6" bgcolor="skyblue"><CENTER><strong> Cantidad de registros: <?php echo $a10; ?> </strong></CENTER></td>
  </tr>
  <tr style="color:#000000; text-align:center; ">
				<th>Asesor</th>
				<th>Usuario</th>
				<th>N° de Servicio</th>
				<th>Fecha_Retención</th>
				<th>Beneficio</th>
				<th>Observacion</th>
	</tr>
  
<?php
    if($a3 == '-1'){
       $block = mysqli_query($enlace, "SELECT CONCAT(u.1er_nombre,' ', u.1er_apellido) As Asesor, u.usuario, g.num_serv, g.fecha_hora, g.beneficio, g.observacion FROM retenciones g INNER JOIN usuarios u ON u.id=g.id_user WHERE g.fecha_hora BETWEEN '$a1' AND '$a2'"); 
    }else{
       $block = mysqli_query($enlace, "SELECT CONCAT(u.1er_nombre,' ', u.1er_apellido) As Asesor, u.usuario, g.num_serv, g.fecha_hora, g.beneficio, g.observacion FROM retenciones g INNER JOIN usuarios u ON u.id=g.id_user WHERE g.fecha_hora BETWEEN '$a1' AND '$a2' AND g.id_user='$a3'");
    }
	mysqli_data_seek ($block, 0);
	while($res=mysqli_fetch_array($block)){

	$ani=$res[0];
	$fecha=$res[1];
	$hora=$res[2];
	$tmo=$res[3];
	$omnicanal=$res[4];
	$cedula=$res[5];


?>
  <tr style="text-align:left;">
    <td style="width:100px; text-align:center;"><?php echo $ani; ?></td>
    <td style="width:100px; text-align:center;"><?php echo $fecha; ?></td>
    <td style="width:100px; text-align:center;"><?php echo $hora; ?></td>
    <td style="width:100px; text-align:center;"><?php echo $tmo; ?></td>
    <td style="width:100px; text-align:center;"><?php echo $omnicanal; ?></td>
    <td style="width:700px; text-align:center;"><?php echo $cedula; ?></td>
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
   