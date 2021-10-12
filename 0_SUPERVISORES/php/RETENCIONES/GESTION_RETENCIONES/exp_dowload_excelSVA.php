<?php
    error_reporting(0);
    session_start();
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Reporte_retenciones.xls");

    include_once '../../../../php/conexion_bd.php';
    
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
    <td colspan="6" bgcolor="skyblue"><CENTER><strong>Bitacora de Retenciones</strong></CENTER></td>
  </tr> 

  <tr style="color:#000000; text-align:center; ">
                <th>Fecha de llamada</th>
                <th>Nombre de Asesor </th>
                <th>Estado Actual</th>
				<th>Numero de Servicio</th>
				<th>Beneficio</th>
				<th>Observacion</th>
	</tr>
  
<?php

	if($a3==="-1"){
	   $block = mysqli_query($enlace, "SELECT *,CONCAT(u.1er_nombre,' ', u.1er_apellido) As Nombre FROM retenciones e INNER JOIN usuarios u ON u.id=e.id_user WHERE e.fecha_hora BETWEEN '$a1' AND '$a2'");
	}else{
	   $block = mysqli_query($enlace, "SELECT *,CONCAT(u.1er_nombre,' ', u.1er_apellido) As Nombre FROM retenciones e INNER JOIN usuarios u ON u.id=e.id_user WHERE e.id_user='$a3' AND e.fecha_hora BETWEEN '$a1' AND '$a2'"); 
	} 
	mysqli_data_seek ($block, 0);
	while($res=mysqli_fetch_array($block)){

?>
  <tr style="text-align:left;">
    <td style="width:110px; text-align:center;"><?php echo $res[3]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[Nombre]; ?></td>
    <?php if($res[5] == "1"){?>
        <td style="width:110px; text-align:center;"><?php echo 'Retenido'; ?></td>
    <?php }else if($res[5] == "2"){?>
        <td style="width:110px; text-align:center;"><?php echo 'No Retenido'; ?></td>
    <?php }else if($res[5] == "3"){?>
        <td style="width:110px; text-align:center;"><?php echo 'Pendiente'; ?></td>
    <?php } ?>
    <td style="width:110px; text-align:center;"><?php echo $res[2]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[4]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[6]; ?></td>
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
   