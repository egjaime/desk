<?php
    session_start();
    include '../../php/conexion_bd.php';
    
    $a1 = "";

    $a1 = $_GET['a1']; //valor usuario
    $a3 = $_GET['a2']; //valor fecha

    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    
    date_default_timezone_set("America/Guayaquil");
    $date_now =  date('Y-m-d');
    
            if ($a3 === "1"){
                $fch1 = $date_now;
                $fch2 = $date_now;
            }else if ($a3 === "9"){
                $fch1 = '2021-01-01';
                $fch2 = $date_now;
            }else if ($a3 === "2"){
                $date_ayer = strtotime('-1 day', strtotime($date_now));
                $date_ayer = date('Y-m-d', $date_ayer);
                $fch1 = $date_ayer;
                $fch2 = $date_ayer;
                //echo 'Ayer fue: ' . $date_ayer;
            }else if ($a3 === "3"){
                $prt = substr($date_now, 0, 8);
                $prt = $prt . '01';
                $fch1 = $prt;
                $fch2 = $date_now;
                //echo 'El mes va desde el: ' . $prt . ' hasta el: ' . $date_now;
            }else if ($a3 === "4"){
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
        
            }//fin if fechas

    
    $search = "-";
    $replace = "";
    $string = $fch1;
    $fcht = str_ireplace($search, $replace, $string);
    
    $string2 = $fch2;
    $fchr = str_ireplace($search, $replace, $string2);

?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- DataTables -->
  <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

    <div class="modal-body"> 
      <table id="example293345193995534" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Asesor de Cobranza</th>
                <th>Fecha de Contacto</th>
                <th>Propietario</th>
                <th>Cedula</th>
                <th>Placa</th>
                <th>Telefono</th>
				<th>Estado de Gestion</th>
				<th>Tipificacion</th>
				<th>Observacion</th>
			</tr>
        </thead>
            <tbody>
				<?php
				    if($a1==="-1"){
				      $block = mysqli_query($enlace, "SELECT *,CONCAT(u.1er_nombre,' ', u.1er_apellido) As nombre_as FROM HBOFidelizacion e INNER JOIN usuarios u ON u.id=e.cod_vendedor WHERE e.fecha_atencion BETWEEN '$fch1' AND '$fch2' AND e.cod_venta != '8'");
				      //$block = mysqli_query($enlace, "SELECT *,CONCAT(u.1er_nombre,' ', u.1er_apellido) As nombre_as FROM HBOFidelizacion e INNER JOIN usuarios u ON u.id=e.cod_vendedor WHERE e.fecha_atencion BETWEEN '$fch1' AND '$fch2' AND e.cod_venta != 9 AND e.cod_venta != 0");
				    }else{
				        $block = mysqli_query($enlace, "SELECT *,CONCAT(u.1er_nombre,' ', u.1er_apellido) As nombre_as FROM HBOFidelizacion e INNER JOIN usuarios u ON u.id=e.cod_vendedor WHERE e.cod_vendedor='$a1' AND e.fecha_atencion BETWEEN '$fch1' AND '$fch2' AND e.cod_venta != '8'");
				        //$block = mysqli_query($enlace, "SELECT *,CONCAT(u.1er_nombre,' ', u.1er_apellido) As nombre_as FROM HBOFidelizacion e INNER JOIN usuarios u ON u.id=e.cod_vendedor WHERE e.cod_vendedor='$a1' AND e.fecha_atencion BETWEEN '$fch1' AND '$fch2'  AND e.cod_venta != 9 AND e.cod_venta != 0");
				    }
				    mysqli_data_seek ($block, 0);
					while($rows=mysqli_fetch_array($block)){
				?>
					<tr>
					    <td><?php echo $rows['nombre_as'] ?></td>
					    <td><?php echo $rows['fecha_atencion'] ?></td>
					    <td><?php echo $rows['nombre'] ?></td>
					    <td><?php echo $rows['cedula'] ?></td>
					    <td><?php echo $rows['placa'] ?></td>
					    <td><?php echo $rows['telf'] ?></td>
						<td><?php echo $rows['estado_venta'] ?></td>
						<td><?php echo $rows['motivo_tip2'] ?></td>
						<td><?php echo $rows['observacion'] ?></td>
					</tr>
				<?php
					} 
				?>
            </tbody>
          </table>
          </div> 
            <div class="modal-footer">
                
                <button type="button" title="Descargar en formato.xls" onClick="descargar_excel2();" id="<?php echo $a1 ?>" class="btn btn-success pull-left" data-dismiss="modal"><i class="fa fa-download"></i>&nbsp Excel</button>

            </div>

<!-- DataTables -->
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- page script -->
<script>

     function descargar_excel2(){
       var a1 = <?php echo $fcht ?>;
       var a2 = <?php echo $fchr ?>;
       var a3 = <?php echo $a1 ?>; //usuario
       self.location = "0_SUPERVISORES/Descargas/exp_dowload_excelECDF.php?a19="+a1+"&a22="+a2+"&a33="+a3;
    }
   
  $(function () {
    $('#example293345193995534').DataTable( {
        "destroy": true,
        "pageLength": 10,
        "searching": true,
        "lengthChange": true,
        "aaSorting": [[ 0, "desc" ]],
        language: {
            "decimal":        "",
            "emptyTable":     "No se encontraron Gestiones Transvial",
            "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
            "infoFiltered":   "(Filtro de _MAX_ total registros)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "Mostrar _MENU_ registros",
            "loadingRecords": "Cargando...",
            "processing":     "Procesando...",
            "search":         "Buscar:",
            "zeroRecords":    "No se encontraron coincidencias",
            "paginate": {
            "first":      "Primero",
                "last":       "Ultimo",
                "next":       "Proximo",
                "previous":   "Anterior"
            },
            "aria": {
                "sortAscending":  ": Activar orden de columna ascendente",
                "sortDescending": ": Activar orden de columna DESscendente",
            }
        }
    } );
  })



</script>
</body>
</html>

<?php 
  mysqli_close($enlace);
?>
