<?php
    error_reporting(0);
    session_start();
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Reporte_gestion.xls");

    include '../../php/conexion_bd.php';
    
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
       $block = mysqli_query($enlace, "SELECT * FROM 1800LoJusto WHERE fecha_registro BETWEEN '$a1' AND '$a2'"); 
    }else{
       $block = mysqli_query($enlace, "SELECT * FROM 1800LoJusto WHERE fecha_registro BETWEEN '$a1' AND '$a2' AND id_user='$a3'");
    }
	mysqli_data_seek ($block, 0);
	while($res=mysqli_fetch_array($block)){
	    $a10 = $res[0];
	}
    
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
    <td colspan="13" bgcolor="skyblue"><CENTER><strong>Denuncias Cargadas - Desde: <?php echo $a4; ?> Hasta: <?php echo $a5; ?> </strong></CENTER></td>
  </tr> 
  <tr style="color:#000000; text-align:center; ">
                <th>Hora</th>
                <th>N</th>
				<th>Fecha</th>
				<th>Producto</th>
				<th>Tipo Denuncia</th>
				<th>Denunciado</th>
				<th>Detalle</th>
				<th>Provincia</th>
				<th>Canton</th>
				<th>Direccion</th>
				<th>Denunciante</th>
				<th>Telefono</th>
				<th>Correo</th>
	</tr>
  
<?php
    if($a3 == '-1'){
       $block = mysqli_query($enlace, "SELECT * FROM 1800LoJusto WHERE fecha_registro BETWEEN '$a1' AND '$a2'"); 
    }else{
       $block = mysqli_query($enlace, "SELECT * FROM 1800LoJusto WHERE fecha_registro BETWEEN '$a1' AND '$a2' AND id_user='$a3'");
    }
	mysqli_data_seek ($block, 0);
	while($res=mysqli_fetch_array($block)){


?>
  <tr style="text-align:left;">
                        <td><?php echo $res['hora'] ?></td>
					    <td><?php echo $res['id_denuncia'] ?></td>
					    <td><?php echo $res['fecha_registro'] ?></td>
						<td><?php echo $res['producto'] ?></td>
						<td><?php echo $res['tipo_denuncia'] ?></td>
						<td><?php echo $res['denunciado'] ?></td>
						<td><?php echo $res['detalle_denuncia'] ?></td>
						<td><?php echo $res['provincia'] ?></td>
						<td><?php echo $res['canton'] ?></td>
						<td><?php echo $res['direccion_denunciado'] ?></td>
						<td><?php echo $res['denunciante'] ?></td>
						<td><?php echo $res['telefono'] ?></td>
						<td><?php echo $res['correo'] ?></td>
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
   
   