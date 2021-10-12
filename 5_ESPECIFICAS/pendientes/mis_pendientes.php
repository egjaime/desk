<?php
    session_start();
    include '../../php/conexion_bd.php';
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
      <h3 class="box-title">Casos Pendientes del Asesor</h3>
    </div>
    <div class="modal-body"> 
      <table id="exampleN1122" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Numero de Servicio</th>
				<th>Fecha de llamada</th>
				<th>Observacion</th>
			</tr>
            </thead>
            <tbody>
				<?php
					$block = mysqli_query($enlace, "SELECT id_retencion,num_serv,fecha_hora,observacion FROM retenciones WHERE estado=3 AND id_user='{$_SESSION['id']}'");
					mysqli_data_seek ($block, 0);
					while($rows=mysqli_fetch_array($block)){
				?>
					<tr id="<?php echo 'COD' . $rows['id_retencion']?>">
					    <td><?php echo $rows['num_serv'] ?></td>
					    <td><?php echo $rows['fecha_hora'] ?></td>
					    <td><?php echo $rows['observacion'] ?></td>
						<td>
							<button type="button"  id="<?php echo $rows['id_retencion']. '$' . $rows['num_serv']. '$' .$rows['observacion'] ?>" onClick="pro_pendientes22(this.id);" class="btn btn-info pull-center">Gestionar</button>
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
      var id_ret = separa2[0];
      var num_ser = separa2[1];
      var obs = separa2[2];
      if (confirm("\xbfContinuar y gestionar?")){
         document.getElementById(id).disabled = true;
         $('#cp88').hide().html('<button type="button" onclick="javascript:sendForm();" class="btn btn-primary btn-block btn-flat"><img src="assets/img/gif-carga.gif" width="20" height="20"/></button>').fadeIn(10);
         $("#content1").load('5_ESPECIFICAS/pendientes/gestion_pendientes.php', {aa1: id_ret, aa2: num_ser, aa3: obs});
      }
  }
  

   
   
  $(function () {
    $('#exampleN1122').DataTable( {
        "destroy": true,
        "pageLength": 10,
        "searching": true,
        "lengthChange": true,
        language: {
            "decimal":        "",
            "emptyTable":     "No hay retenciones pendientes",
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
