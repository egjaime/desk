<?php
    session_start();
    include '../../../../php/conexion_bd.php';
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
      <h3 class="box-title">Asignar casos Agendados HBO</h3>
    </div>
    <div class="modal-body"> 
      <table id="exampleN67" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>C&eacute;dula</th>
				<th>Nombre</th>
				<th>Estado de Venta</th>
				<th>Fecha Agendamiento</th>
				<th>Hora Agendamiento</th>
				<th>Observaci&oacute;n</th>
				<th>Vendedor</th>
				<th>Asignar:</th>
			</tr>
            </thead>
            <tbody>
				<?php
					$block = mysqli_query($enlace, "SELECT `codigo_bd`, `cedula`,`nombre`,`estado_venta`,`fecha_agendamiento`,`hora_agendamiento`,`observacion`, concat(U.1er_nombre,' ', U.1er_apellido) as Vendedor FROM HBOFidelizacion as H INNER JOIN usuarios as U WHERE `cod_venta`=3 AND `asignado_a`=0 AND U.id=H.cod_vendedor");
					mysqli_data_seek ($block, 0);
					while($rows=mysqli_fetch_array($block)){
				?>
					<tr id="<?php echo 'COD' . $rows['codigo_bd']?>">
					    <td><?php echo $rows['cedula'] ?></td>
					    <td><?php echo $rows['nombre'] ?></td>
						<td><?php echo $rows['estado_venta'] ?></td>
						<td><?php echo $rows['fecha_agendamiento'] ?></td>
						<td><?php echo $rows['hora_agendamiento'] ?></td>
						<td><?php echo $rows['observacion'] ?></td>
						<td><?php echo $rows['Vendedor'] ?></td>
						<td><select class="form-control select2" onChange="pro_asignar(this.id);"  style="width: 100%;" id="<?php echo $rows['codigo_bd'] ?>">
							<option selected="selected" value="" disabled>Seleccione..</option>
								<?php
									$trx9="SELECT id, usuario FROM usuarios WHERE rol='3' AND servicio='3' OR servicio='1,3' ORDER BY usuario ASC";  
									$resS=mysqli_query($enlace,$trx9);
									while ($filaX = mysqli_fetch_array($resS)) {
									   echo '<option value="'.$filaX['id']. '$' . $filaX['usuario'].'">'.$filaX['usuario'].'</option>';
									   
								    }
							    ?>
						    </select>
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

  function pro_asignar(id){
      var cod = document.getElementById(id).value;
      var separa = cod.split("$");
      var idUser = separa[0];
      var user = separa[1];
      //alert("Valor de iduser: " + idUser + " - Valor usuario: " + user + " - valor id caso: " + id);
      if (confirm("\xbfAsignar Agendado a: " + user + "?")){
        var dataString = 'a1=' + idUser + '&a2=' + user + '&a3=' + id;
		$.ajax({
			type: 'POST',
			url: '3_fidelizacion_HBO/php/supervision/agendados/agendar.php', 
			data:  dataString, 
			success: function(x){
			    if(x==1){
			        $("#COD" + id).fadeOut(800);
			    }
    		}
		});
      }
  }
  

   
   
  $(function () {
    $('#exampleN67').DataTable( {
        "destroy": true,
        "pageLength": 10,
        "searching": false,
        "lengthChange": false,
        language: {
            "decimal":        "",
            "emptyTable":     "No hay tickets pendientes",
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
    
    function cargar(){
        ctrl_menu_sup_escalado2nv();
    }
    
</script>
</script>
</body>
</html>

<?php 
  mysqli_close($enlace);
?>
