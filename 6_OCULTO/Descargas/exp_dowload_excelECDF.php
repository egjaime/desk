<?php
    error_reporting(0);
    session_start();
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Reporte_gestion_DTHOculto.xls");

    include_once '../../php/conexion_bd.php';
    
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
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

<title>Prueba</title>
</head>
<body>
<table width="100%" border="1">

  <tr style="color:#000000; text-align:center; height:30px;">
                <th>codigo_bd</th>
                <th>asesor</th>
                <th>fecha_registro</th>
                <th>hora_registro</th>
                <th>nombre_cliente</th>
                <th>cedula_cliente</th>
				<th>ns</th>
				<th>gestion_exitosa</th>
				<th>tipificacion</th>
				<th>observacion</th>
	</tr>
  
<?php

	if($a3==="-1"){
	   $block = mysqli_query($enlace, "SELECT *,CONCAT(u.1er_nombre,' ', u.1er_apellido) As nombre_as FROM gestion_oculto e INNER JOIN usuarios u ON u.id=e.id_user WHERE e.fecha_registro BETWEEN '$a1' AND '$a2'");

	}else{
	   $block = mysqli_query($enlace, "SELECT *,CONCAT(u.1er_nombre,' ', u.1er_apellido) As nombre_as FROM gestion_oculto e INNER JOIN usuarios u ON u.id=e.id_user WHERE id_user='$a3' AND e.fecha_registro BETWEEN '$a1' AND '$a2'"); 
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
    <td style="width:110px; text-align:center;"><?php echo $res[8]; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $res[9]; ?></td>
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
   