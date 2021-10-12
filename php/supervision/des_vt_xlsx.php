<?php
    error_reporting(0);
    session_start();
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Retenciones_DTHN1_ligaPro.xls");

    include_once '../conexion_bd.php';
    
    $a1 = addslashes($_POST['a1']);
    
    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=big5">
<script type="text/javascript" src="js/val_index.js"></script>

<title>Prueba</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">

  <tr style="color:#000000; text-align:center; ">
                <th width="140">FECHA DE INGRESO</th>
                <th width="160">CLIENTE</th>
				<th width="100">C&Eacute;DULA</th>
				<th width="100">NUMERO VIRTUAL</th>
				<th width="120">CONTRATO</th>
				<th width="160">BENEFICIO</th>
				<th width="140">PLAN ACTUAL CLIENTE</th>
				<th width="120">ANIPAGADOR</th>
				<th width="250">OBSERVACION</th>
	</tr>
  
<?php

$block = mysqli_query($enlace, "SELECT CONCAT(u.1er_nombre,' ', u.1er_apellido) As Nombre, e.fecha_ingreso, e.cedula_ruc as cedula_ruc, e.numero_virtual as virtual, e.contrato as contrato, e.beneficio as beneficio, e.plan_actual as plan_actual, e.anipagador as anipagador, e.observacion, e.cliente as observacion FROM tmp_retdth e INNER JOIN usuarios u ON u.id=e.id_user");
mysqli_data_seek ($block, 0);
while($res=mysqli_fetch_array($block)){
?>
	<tr>
	    <td align="left"><?php echo $res[1] ?></td>
	    <td align="left"><?php echo $res[9] ?></td>
		<td align="left"><?php echo $res[2] ?></td>
		<td align="left"><?php echo $res[3] ?></td>
		<td align="left"><?php echo $res[4] ?></td>
		<td align="left"><?php echo $res[5] ?></td>
		<td align="left"><?php echo $res[6] ?></td>
		<td align="left"><?php echo $res[7] ?></td>
		<td align="left"><?php echo $res[8] ?></td>
				
	</tr>
<?php
  }
?>
</table>

</body>
</html>
<?php
echo '1';
mysqli_close($enlace);
?>
   