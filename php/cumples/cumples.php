<?php
    session_start();
    include '../conexion_bd.php';
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
      <h3 class="box-title">Cumplea&ntilde;os Impulsa</h3>
    </div>
    <div class="modal-body"> 
      <table id="exampleN55" class="table table-bordered table-striped">
        <thead>
            <tr>
				<th>Mes</th>
				<th>Dia</th>
				<th>Asesor</th>
				<th>Fecha Completa</th>
				<th>Color Favorito</th>
				<th>Comida Favorita</th>
				<th>Pasatiempo</th>
				<th>Servicio</th>
			</tr>
            </thead>
            <tbody>
				<?php
					$block = mysqli_query($enlace, "SELECT CONCAT(`1er_nombre`,' ',`1er_apellido`) As Nombre, SUBSTRING(`fecha_cum`,6,2)as Mes, SUBSTRING(`fecha_cum`,9,2)as Dia,`fecha_cum` as Fecha_Completa, `color`,`comida`,`hobby`, servicio, rol FROM `usuarios` where `activo`!=3 and `rol`!=1 ORDER BY `Mes` ASC");
					mysqli_data_seek ($block, 0);
					while($rows=mysqli_fetch_array($block)){
				?>
					<tr>
					    <td><?php 
					          if($rows[1] == '01')echo 'Enero'; else if($rows[1] == '02')echo 'Febrero'; else if($rows[1] == '03')echo 'Marzo';else if($rows[1] == '04')echo 'Abril';else if($rows[1] == '05')echo 'Mayo';else if($rows[1] == '06')echo 'Junio';else if($rows[1] == '07')echo 'Julio';else if($rows[1] == '08')echo 'Agosto';else if($rows[1] == '09')echo 'Septiembre';else if($rows[1] == '10')echo 'Octubre';else if($rows[1] == '11')echo 'Noviembre';else if($rows[1] == '12')echo 'Diciembre';else if($rows[1] == '00')echo 'Pendiente';
					        ?></td>
					    <td><?php echo $rows[2] ?></td>
						<td><?php echo $rows[0] ?></td>
						<td><?php echo $rows[3] ?></td>
						<td><?php echo $rows[4] ?></td>
						<td><?php echo $rows[5] ?></td>
						<td><?php echo $rows[6] ?></td>
						<td><?php if($rows[8] == '3'){
						              if($rows[7] == '1')echo 'DTH'; else if($rows[7] == '2')echo 'Lo Justo'; else if($rows[7] == '3')echo 'HBO'; else if($rows[7] == '1,3')echo 'DTH y HBO'; else if($rows[7] == '4')echo 'DTH Oculto'; else if($rows[7] == '1,4')echo 'DTH y DTH Oculto'; else if($rows[7] == '3,4')echo 'HBO y DTH Oculto'; else if($rows[7] == '1,3,4')echo 'DTH, HBO y DTH Oculto'; else if($rows[7] == '1,2,3')echo 'DTH, Lo Justo y HBO'; else if($rows[7] == '1,2,3,4')echo 'DTH, Lo Justo, HBO y DTH Oculto';
						          }else{
						              echo 'STAFF';
						          }     
						    ?></td>
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
    $('#exampleN55').DataTable( {
        "destroy": true,
        "pageLength": 10,
        "searching": true,
        "lengthChange": true,
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
    
    function descargar_excel(x){
        if (confirm("Al descargar se eliminarán los registros de la base de datos. \xbfContinuar y descargar?")){
            self.location = "php/supervision/des_nivel2_xlsx.php";
            cargar();
        }
    }

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
