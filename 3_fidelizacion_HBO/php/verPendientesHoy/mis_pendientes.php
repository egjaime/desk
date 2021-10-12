<?php
    session_start();
    include '../../../php/conexion_bd.php';
    date_default_timezone_set("America/Guayaquil");
    $date_now =  date('Y-m-d');
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

	<style>
		.loader2{
			position: fixed;
			left: 230px;
			top: 50px;
			width: 82%;
			height: 100%;
			z-index: 9999;
			background: url('assets/img/Preloader_2.gif') 50% 50% no-repeat rgb(249,249,249);
			opacity: .6;
		}

        #modal-default{
        margin: 0;
        margin-right: auto;
        margin-left: auto;
        width: 100%;
        }

	</style> 
  <script type="text/javascript" src="js/val_index.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- DataTables -->
  <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">


  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    <div class="loader2" id="loader2"></div>
    <div class="box-header">
      <h3 class="box-title">Casos agendados para Hoy</h3>
    </div>
    <div class="modal-body"> 
      <table id="exampleN97" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Fecha Inicial</th>
				<th>Fecha de Agendado</th>
				<th>Hora de Agendado</th>
				<th>Matricula</th>
                <th>C&eacute;dula</th>
				<th>Nombre</th>
				<th>Tipificacion</th>
				<th>Cantidad de Contactos</th>
				<th>Observacion</th>
				<th>Gestionar</th>
			</tr>
            </thead>
            <tbody>
				<?php
					$block = mysqli_query($enlace, "SELECT `codigo_bd`,`cedula`,`nombre`,`placa`,`fecha_agendamiento`,`hora_agendamiento`,`cant_contactos`, `observacion`, `motivo_tip2`, `asignado_fecha` FROM HBOFidelizacion WHERE `cod_venta`=5 AND `cod_vendedor`='{$_SESSION['id']}' AND fecha_agendamiento='$date_now'");
					mysqli_data_seek ($block, 0);
					while($rows=mysqli_fetch_array($block)){
				?>
					<tr id="<?php echo 'COD' . $rows['codigo_bd']?>">
					    <td><?php echo $rows['asignado_fecha'] ?></td>
					    <td><?php echo $rows['fecha_agendamiento'] ?></td>
					    <td><?php echo $rows['hora_agendamiento'] ?></td>
					    <td><?php echo $rows['placa'] ?></td>
					    <td><?php echo $rows['cedula'] ?></td>
					    <td><?php echo $rows['nombre'] ?></td>
					    <td><?php echo $rows['motivo_tip2'] ?></td>
					    <td><?php echo $rows['cant_contactos'] ?></td>
					    <td><?php echo $rows['observacion'] ?></td>
						<td>
							<button type="button"  id="<?php echo $rows['codigo_bd']. '$' . $rows['cedula']. '$' .$rows['nombre'] ?>" onClick="pro_pendientes22(this.id);" class="btn btn-info pull-center">Gestionar</button>
						</td>
					</tr>
				<?php
					} 
				?>
            </tbody>
          </table>
          </div> 
            <div class="modal-footer">
                
            </div>

<!-- DataTables -->
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- page script -->
<script>

  function pro_pendientes22(id){
      var separa2 = id.split("$");
      var cod_bd = separa2[0];
      var ced = separa2[1];
      var name = separa2[2];
      if (confirm("\xbfContinuar y gestionar?")){
         document.getElementById(id).disabled = true;
         $('#cp88').hide().html('<button type="button" onclick="javascript:sendForm();" class="btn btn-primary btn-block btn-flat"><img src="assets/img/gif-carga.gif" width="20" height="20"/></button>').fadeIn(10);
         $("#content1").load('3_fidelizacion_HBO/php/verPendientes/gestion_pendientes.php', {aa1: ced, aa2: name, aa3: cod_bd});
      }
  }
  

   
   
  $(function () {
    $('#exampleN97').DataTable( {
        "destroy": true,
        "pageLength": 10,
        "searching": true,
        "lengthChange": true,
        language: {
            "decimal":        "",
            "emptyTable":     "No hay agendados para hoy",
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
    


    $('#loader2').fadeOut(1500);
    

</script>
</script>
</body>
</html>

<?php 
  mysqli_close($enlace);
?>
