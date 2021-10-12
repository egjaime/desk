<?php
    error_reporting(0);
    session_start();
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Reporte_gestion.xls");

    include_once '../../conexion_bd.php';
    
    $a1 = $_GET['a1']; //seleccion
    
    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    
    date_default_timezone_set("America/Guayaquil");
    $date_now = date('Y-m-d');
    
    if ($a1 === "0"){
        $fch1 = $date_now;
        $fch2 = $date_now;
    }else if ($a1 === "1"){
        $date_ayer = strtotime('-1 day', strtotime($date_now));
        $date_ayer = date('Y-m-d', $date_ayer);
        $fch1 = $date_ayer;
        $fch2 = $date_ayer;
        //echo 'Ayer fue: ' . $date_ayer;
    }else if ($a1 === "2"){
        $prt = substr($date_now, 0, 8);
        $prt = $prt . '01';
        $fch1 = $prt;
        $fch2 = $date_now;
        //echo 'El mes va desde el: ' . $prt . ' hasta el: ' . $date_now;
    }else if ($a1 === "3"){
        $prt2 = substr($date_now, -5,2);
        $prt3 = $prt2 - 1;
        if ($prt3 === 0){
            $prt3 = 12;
        }

        //valido hasta que meses son de 31
        if ($prt3 === 1 || $prt3 === 3 || $prt3 === 5 || $prt3 === 7 || $prt3 === 8 || $prt3 === 10 || $prt3 === 12){
            $dia_final_m_a = 31;
        //valido si es hasta el 30
        }else if($prt3 === 4 || $prt3 === 6 || $prt3 === 9 || $prt3 === 11){
            $dia_final_m_a = 30;
        //sino por defecto es febrero
        }else{
            $dia_final_m_a = 29;
        }
        
        if ($prt2 === "01"){
            $prt3 = 12;
            //validar anio
            $anio = substr($date_now, 0,5);
            $anioT = $anio - 1;
            $prt4 = $anioT . '-' . $prt3 . '-01' ;
            $prt5 = $anioT . '-' . $prt3 . '-' .$dia_final_m_a ;
            $fch1 = $prt4;
            $fch2 = $prt5;
           //echo 'El mes anterior va desde el: ' . $prt4 . ' hasta el: ' . $prt5;
        }else{

            $prt3 = $prt2 - 1;
            $anio = substr($date_now, 0,5);
            if ($prt3 === 10 || $prt3 === 11 || $prt3 === 12){
                $prt4 = $anio . '-' . $prt3 . '-01' ;
                $prt5 = $anio . '-' . $prt3 . '-' .$dia_final_m_a ;
            }else{
                $prt4 = $anio . '0' . $prt3 . '-01' ;
                $prt5 = $anio . '0' . $prt3 . '-' .$dia_final_m_a ;
            }
            $fch1 = $prt4;	
            $fch2 = $prt5;
            //echo 'El mes anterior va desde el: ' . $prt4 . ' hasta el: ' . $prt5;
        }

    }
    
    //valido cuantos registros hay
    
    $block = mysqli_query($enlace, "SELECT count(*) as total FROM gestion WHERE id_usuario={$_SESSION['id']} AND fecha_call BETWEEN '$fch1' AND '$fch2'");
    mysqli_data_seek ($block, 0);
    $res=mysqli_fetch_array($block);
    
    $block2 = mysqli_query($enlace, "SELECT usuario FROM usuarios WHERE id={$_SESSION['id']}");
    mysqli_data_seek ($block2, 0);
    $res2=mysqli_fetch_array($block2);
    

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
    <td colspan="8" bgcolor="skyblue"><CENTER><strong>Reporte de Gestion (<?php echo $res2[0]; ?>)</strong></CENTER></td>
  </tr>
  <tr>
    <td colspan="8" bgcolor="skyblue"><CENTER>Total de registros:<strong> <?php echo $res[0]; ?></strong> - Del: <strong><?php echo $fch1; ?></strong> al <strong><?php echo $fch2; ?></strong></CENTER></td>
  </tr>
  <tr style="color:#000000; text-align:center; ">
 		<th>Anillamador</th>
		<th>Fecha llamada</th>
		<th>Hora Ingreso</th>
		<th>TMO</th>
		<th>Ticket Omnicanal</th>
		<th>Estado</th>
		<th>Cedula</th>
		<th>Observacion</th>
	</tr>
  
<?php

$block = mysqli_query($enlace, "SELECT anillamador, date_format(fecha_call, '%d-%m-%Y') as fecha_call, hora_inicio, tmo, omnicanal, estado, cedula, observacion FROM gestion WHERE id_usuario={$_SESSION['id']} AND fecha_call BETWEEN '$fch1' AND '$fch2'");
mysqli_data_seek ($block, 0);
while($res=mysqli_fetch_array($block)){	

	$ani=$res[0];
	$fecha=$res[1];
	$hora=$res[2];
	$tmo=$res[3];
	$omnicanal=$res[4];
	$estado=$res[5];
	$cedula=$res[6];
	$observacion=$res[7];

?>
  <tr style="text-align:left;">
    <td style="width:110px; text-align:center;"><?php echo $ani; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $fecha; ?></td>
    <td style="width:110px; text-align:center;"><?php echo $hora; ?></td>
        <?php $tmoM = floor($res[3] / 60);
            $tmoM2 = $tmoM * 60;
            $tmoS = $res[3] - $tmoM2;
            if(strlen($tmoM) == '1'){
                $tmoM = "0" . $tmoM;
            }
            if(strlen($tmoS) == '1'){
                $tmoS = "0" . $tmoS;
            }
            $tmoT = "00:" . $tmoM . ":" . $tmoS;
        ?>
    <td style="width:110px; text-align:center;"><?php echo $tmoT; ?></td>
    
	<td style="width:110px; text-align:center;"><?php echo $omnicanal; ?></td>
	<?php if ($estado === "1"){?>
		<td style="width:110px; text-align:center;">Resuelto</td> 
		<?php }else if ($estado === "2"){ ?>
		<td style="width:110px; text-align:center;">Interaccion</td>
		<?php }else if ($estado === "3"){ ?>
		<td style="width:110px; text-align:center;">Escalado N2</td>
		<?php }else if ($estado === "4"){ ?>
		<td style="width:110px; text-align:center;">Escalado VT</td>
		<?php }else if ($estado === "5"){ ?>
		<td style="width:110px; text-align:center;">Sin audio / Caida</td> 
		<?php }else if ($estado === "6"){ ?>
		<td style="width:110px; text-align:center;">Guia Teléfonica</td>
	<?php } ?>
    <td style="width:110px; text-align:center;"><?php echo $cedula; ?></td>
    <td style="width:350px;"><?php echo $observacion; ?></td>
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
   