<?php
    session_start();
    include '../../../php/conexion_bd.php';
    
    $a1 = "";

    $a1 = $_GET['a1']; //valor referencia

    $tildes = $enlace->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    
    date_default_timezone_set("America/Guayaquil");
    $date_now =  date('Y-m-d');
    
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
      <table id="example2933400" class="table table-bordered table-striped">
        <thead>
            <tr>
				<th>Cédula</th>
				<th>Anillamador</th>
			</tr>
        </thead>
            <tbody>
				<?php
				    $block = mysqli_query($enlace, "SELECT * FROM gestion WHERE cedula=$a1"); 
				    mysqli_data_seek ($block, 0);
					while($rows=mysqli_fetch_array($block)){
				?>
					<tr>
						<td><?php echo $rows['cedula'] ?></td>
						<td><?php echo $rows['anillamador'] ?></td>
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
   
  $(function () {
    $('#example2933400').DataTable( {
        "destroy": true,
        "pageLength": 10,
        "searching": false,
        "lengthChange": false,
        language: {
            "decimal":        "",
            "emptyTable":     "No se encontro el numero de cédula",
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


</script>
</body>
</html>

<?php 
  mysqli_close($enlace);
?>
