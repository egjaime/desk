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
      <h3 class="box-title">Descargar Denuncias 1800LoJusto</h3>
    </div>
    <div class="modal-body"> 
      <table id="exampleTable" class="table table-bordered table-striped">
        <thead>
            <tr>
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
            </thead>
            <tbody>
				<?php
					$block = mysqli_query($enlace, "SELECT * FROM 1800LoJusto");
					mysqli_data_seek ($block, 0);
					while($rows=mysqli_fetch_array($block)){
				?>
					<tr>
					    <td><?php echo $rows['id_denuncia'] ?></td>
					    <td><?php echo $rows['fecha_registro'] ?></td>
						<td><?php echo $rows['producto'] ?></td>
						<td><?php echo $rows['tipo_denuncia'] ?></td>
						<td><?php echo $rows['denunciado'] ?></td>
						<td><?php echo $rows['detalle_denuncia'] ?></td>
						<td><?php echo $rows['provincia'] ?></td>
						<td><?php echo $rows['canton'] ?></td>
						<td><?php echo $rows['direccion_denunciado'] ?></td>
						<td><?php echo $rows['denunciante'] ?></td>
						<td><?php echo $rows['telefono'] ?></td>
						<td><?php echo $rows['correo'] ?></td>
					</tr>
				<?php
					} 
				?>
            </tbody>
          </table>
          </div> 
            <div class="modal-footer">
                <button type="button" title="Descargar en formato .xls" onClick="descargar_excel(this);" id="<?php echo $a1 ?>" class="btn btn-success pull-left" data-dismiss="modal"><i class="fa fa-download"></i>&nbsp Excel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>

<!-- DataTables -->
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- page script -->
<script>
   
  $(function () {
    $('#exampleTable').DataTable( {
        "destroy": true,
        "pageLength": 5,
        "searching": true,
        "lengthChange": true,
        language: {
            "decimal":        "",
            "emptyTable":     "No hay registros",
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
    
    function descargar_excel(x){
        self.location = "2_1800lojusto/php/des_1800lojusto_xlsx.php";
    }
    
    function cargar(){
        ctrl_menu_sup_escaladocntplay();
    }

    $('#loader2').fadeOut(1500);
</script>
</body>
</html>

<?php 
  mysqli_close($enlace);
?>
