<?php
    error_reporting(0);
    session_start();
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Reporte_gestion_TRANSVIAL.xls");

    include_once '../../php/conexion_bd.php';
    mysqli_query("SET NAMES 'utf8'");
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
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030" content-Type: "text/html"; charset="utf-8">


<title>Prueba</title>
</head>
<body>
<table width="100%" border="1">

  <tr style="color:#000000; text-align:center; height:30px;">
                <th>codigo_bd</th>
                <th>asesor</th>
                <th>cedula_propietario</th>
                <th>nombre_propietario</th>
                <th>placa</th>
                <th>num_citacion</th>
				<th>fecha_citacion</th>
				<th>hora_citacion</th>
				<th>dias_mora</th>
				<th>valor</th>
				<th>radar</th>
				<th>telf</th>
				<th>estado_gestion</th>
				<th>tipificacion</th>
				<th>fecha_ultima_modificacion</th>
				<th>hora_ultima_modificacion</th>
				<th>hora_guardado</th>
				<th>fecha_agendamiento</th>
				<th>hora_agendamiento</th>
				<th>cantidad_contactos</th>
				<th>observacion</th>
				<th>fecha_asignado_1eravez</th>
	</tr>
  
<?php

	if($a3==="-1"){
	   $block = mysqli_query($enlace, "SELECT *,CONCAT(u.1er_nombre,' ', u.1er_apellido) As nombre_as, TIMESTAMPDIFF(DAY,`fecha_citacion`,NOW()) as dias_mora FROM HBOFidelizacion e INNER JOIN usuarios u ON u.id=e.cod_vendedor WHERE e.fecha_atencion BETWEEN '$a1' AND '$a2'");
       //$block = mysqli_query($enlace, "SELECT *,CONCAT(u.1er_nombre,' ', u.1er_apellido) As nombre_as, TIMESTAMPDIFF(DAY,`fecha_citacion`,NOW()) as dias_mora FROM HBOFidelizacion e INNER JOIN usuarios u ON u.id=e.cod_vendedor WHERE e.fecha_atencion BETWEEN '$a1' AND '$a2' AND cod_venta != 9 AND cod_venta != 0");
	}else{
	   $block = mysqli_query($enlace, "SELECT *,CONCAT(u.1er_nombre,' ', u.1er_apellido) As nombre_as, TIMESTAMPDIFF(DAY,`fecha_citacion`,NOW()) as dias_mora FROM HBOFidelizacion e INNER JOIN usuarios u ON u.id=e.cod_vendedor WHERE e.cod_vendedor='$a3' AND e.fecha_atencion BETWEEN '$a1' AND '$a2'");
	   //$block = mysqli_query($enlace, "SELECT *,CONCAT(u.1er_nombre,' ', u.1er_apellido) As nombre_as, TIMESTAMPDIFF(DAY,`fecha_citacion`,NOW()) as dias_mora FROM HBOFidelizacion e INNER JOIN usuarios u ON u.id=e.cod_vendedor WHERE e.cod_vendedor='$a3' AND e.fecha_atencion BETWEEN '$a1' AND '$a2' AND cod_venta != 9 AND cod_venta != 0");
	} 
	mysqli_data_seek ($block, 0);
	while($res=mysqli_fetch_array($block)){

?>
  <tr style="text-align:left; height:30px;">
    <td style="width:110px; text-align:center;"><?php echo $res[0]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[nombre_as]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[2]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[3]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[4]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[5]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[6]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[7]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[dias_mora]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[8]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[9]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[10]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[12]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[20]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[13]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[14]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[15]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[16]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[17]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[18]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo utf8_decode($res[21]); ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[22]; ?></td>
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
   