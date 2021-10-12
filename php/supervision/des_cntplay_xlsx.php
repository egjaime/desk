<?php
    error_reporting(0);
    session_start();
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Reporte_Casos_CNTPlay.xls");

    include_once '../conexion_bd.php';
    
    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<script type="text/javascript" src="js/val_index.js"></script>

<title>Prueba</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="9" bgcolor="skyblue"><CENTER><strong>Casos con ticket pendiente en 2do nivel</strong></CENTER></td>
  </tr>
  <tr style="color:#000000; text-align:center; ">
                <th>Asesor</th>
				<th>Usuario-Open</th>
				<th>C&eacute;dula</th>
				<th>Cliente</th>
				<th>Correo</th>
				<th>Falla</th>
				<th>Telefono 1</th>
				<th>Telefono 2</th>
				<th>Observaci贸n</th>
	</tr>
  
<?php

$block = mysqli_query($enlace, "SELECT CONCAT(u.1er_nombre,' ', u.1er_apellido) As Nombre, u.usuario as Asesor, e.cedula, e.nombre, e.correo, e.falla, e.telef1, e.telef2, e.observacion FROM escalar_cntplay e INNER JOIN usuarios u ON u.id=e.id_usuario");
mysqli_data_seek ($block, 0);
while($res=mysqli_fetch_array($block)){
?>
	<tr>
	    <td align="left"><?php echo $res[0] ?></td>
	    <td align="left"><?php echo $res[1] ?></td>
		<td align="left"><?php echo $res[2] ?></td>
		<td align="left"><?php echo $res[3] ?></td>
		<td align="left"><?php echo $res[4] ?></td>
		<?php if ( $res['5'] === "1"){ ?>
			<td>Falla con usuario</td>
		<?php }else if ( $res['5'] === "2"){ ?>
		   <td>Falla con contraseña</td> 
		<?php }else if ( $res['5'] === "3"){ ?>
		   <td>Falla con p&aacute;gina</td>
		<?php } ?>
		<td align="left"><?php echo $res[6] ?></td>
		<td align="left"><?php echo $res[7] ?></td>
		<td align="left"><?php echo $res[8] ?></td>
	</tr>
<?php
  }
  $result="TRUNCATE TABLE escalar_cntplay";  
  $row=mysqli_query($enlace,$result);
  
  $result2="ALTER TABLE escalar_cntplay AUTO_INCREMENT = 1";  
  $row2=mysqli_query($enlace,$result2);
?>
</table>
<script>
   ctrl_menu_sup_escaladocntplay();
</script>
</body>
</html>
<?php
//limpio tabla
echo '1';
mysqli_close($enlace);
?>
   