<?php
    session_start();
    include '../../php/conexion_bd.php';
    
    $a1 = "";
    $a1a = "";
    $a2 = "";
    $a3 = "";
    $a4 = "";
	
    $a1 = $_GET['a1']; //valor referencia
    $a2 = $_GET['a2']; //usuario
    $a3 = $_GET['a3']; //valor fijo
    $a4 = $_GET['a4']; //fecha indicada por el usuario

    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    
    date_default_timezone_set("America/Guayaquil");
    $date_now =  date('Y-m-d');
    
    if ($a1 === "1"){
        if (empty($a2) || empty($a4)){
           echo 'msg server: Campos incompletos.';
        }else{
            //tomo fecha entera y la convierto en dos:$fch1 y $fch2
            $fch1 = substr($a4, 0,10);
            $fch2 = substr($a4, 11);
        }
    }else if($a1 === "2"){
        if(empty($a2) || empty($a3)){
           echo 'msg server: Campos incompletos.';
        }else{
            if ($a3 === "1"){
                $fch1 = $date_now;
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
        }
        
    }
    
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
      <table id="example97" class="table table-bordered table-striped">
        <thead>
            <tr>
				<th>Asesor</th>
				<th>Usuario</th>
				<th>N° de Servicio</th>
				<th>Fecha_Retención</th>
				<th>Beneficio</th>
				<th>Observacion</th>
			</tr>
            </thead>
            <tbody>
				<?php
				    if($a2 == '-1'){
				       $block = mysqli_query($enlace, "SELECT CONCAT(u.1er_nombre,' ', u.1er_apellido) As Asesor, u.usuario, g.num_serv, g.fecha_hora, g.beneficio, g.observacion FROM retenciones g INNER JOIN usuarios u ON u.id=g.id_user WHERE g.fecha_hora BETWEEN '$fch1' AND '$fch2'"); 
				    }else{
				       $block = mysqli_query($enlace, "SELECT CONCAT(u.1er_nombre,' ', u.1er_apellido) As Asesor, u.usuario, g.num_serv, g.fecha_hora, g.beneficio, g.observacion FROM retenciones g INNER JOIN usuarios u ON u.id=g.id_user WHERE g.fecha_hora BETWEEN '$fch1' AND '$fch2' AND g.id_user='$a2'");
				    }
					mysqli_data_seek ($block, 0);
					while($rows=mysqli_fetch_array($block)){
				?>
					<tr>
						<td><?php echo $rows['Asesor'] ?></td>
						<td><?php echo $rows['usuario'] ?></td>
						<td><?php echo $rows['num_serv'] ?></td>
						<td><?php echo $rows['fecha_hora'] ?></td>
                        <td><?php echo $rows['beneficio'] ?></td>
						<td><?php echo $rows['observacion'] ?></td>
					</tr>
				<?php
					} 
				?>
            </tbody>
          </table>
          </div> 
            <div class="modal-footer">
                
                <button type="button" title="Descargar en formato .xls" onClick="descargar_excel();" id="<?php echo $a1 ?>" class="btn btn-success pull-left" data-dismiss="modal"><i class="fa fa-download"></i>&nbsp Excel</button>

            </div>

<!-- DataTables -->
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- page script -->
<script>
   
  $(function () {
    $('#example97').DataTable( {
        "destroy": true,
        "pageLength": 5,
        "searching": true,
        "lengthChange": true,
        language: {
            "decimal":        "",
            "emptyTable":     "No hay registro de bitácora",
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
                "sortDescending": ": Activar orden de columna desendente"
            }
        }
    } );
  })
  

    function descargar_excel(){
       var a1 = <?php echo $fcht ?>;
       var a2 = <?php echo $fchr ?>;
       var a3 = <?php echo $a2 ?>; //usuario
       self.location = "5_ESPECIFICAS/descargas/exp_dowload_excelGE.php?a19="+a1+"&a22="+a2+"&a33="+a3;
    }
  

</script>
</body>
</html>

<?php 
  mysqli_close($enlace);
?>
