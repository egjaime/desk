<?php
    error_reporting(0);
    session_start();
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Reporte_gestion_LIGA_PRO.xls");

    include_once '../../../../php/conexion_bd.php';
    
    $a1 = "";
    $a2 = "";
    $a3 = "";

    $a1 = $_GET['a19']; //fecha 1
    $a2 = $_GET['a22']; //fecha 2
    $a3 = $_GET['a33']; //usuario
    
    $anio1 = substr($a1, 0,4);
    $anio2 = substr($a1, 4,2);
    $anio3 = substr($a1, 6,2);
    
    $anio4 = substr($a2, 0,4);
    $anio5 = substr($a2, 4,2);
    $anio6 = substr($a2, 6,2);
    
    $def1 = $anio1."-".$anio2."-". $anio3." 00:00:00";
    $def2 = $anio4."-".$anio5."-". $anio6." 23:59:59";
    

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
    <td colspan="4" bgcolor="skyblue"><CENTER><strong>Bitácora Liga Pro</strong></CENTER></td>
  </tr> 

  <tr style="color:#000000; text-align:center; ">
                <th>Fecha de Consulta</th>
                <th>Hora de Consulta</th>
                <th>Asesor que Registra</th>
				<th>Consulta</th>

	</tr>
  
<?php



	if($a3==="-1"){
	    $block = mysqli_query($enlace, "SELECT *,CONCAT(u.1er_nombre,' ', u.1er_apellido) As Nombre FROM tmp_ppv e INNER JOIN usuarios u ON u.id=e.id_usuario WHERE e.fecha BETWEEN '$def1' AND '$def2'");
	}else{
	   $block = mysqli_query($enlace, "SELECT *,CONCAT(u.1er_nombre,' ', u.1er_apellido) As Nombre FROM tmp_ppv e INNER JOIN usuarios u ON u.id=e.id_usuario WHERE e.id_usuario='$a3' AND e.fecha BETWEEN '$def1' AND '$def2'");
	} 
	mysqli_data_seek ($block, 0);
	while($res=mysqli_fetch_array($block)){

?>
      <tr style="text-align:left;">
        <td style="width:110px; text-align:center;"><?php echo $res['fecha']; ?></td>
        <td style="width:110px; text-align:center;"><?php echo $res['hora']; ?></td>
        <td style="width:110px; text-align:center;"><?php echo $res['Nombre']; ?></td>
        <td style="width:110px; text-align:center;"><?php echo $res['respuesta']; ?></td>
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
   