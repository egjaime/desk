<?php
    session_start();
    include '../../../../php/conexion_bd.php';
    
    $a1 = "";
    $a2 = "";

    $a1 = $_GET['a1']; //valor referencia
    $a2 = $_GET['a2']; //valor referencia

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
      <table id="example293341" class="table table-bordered table-striped">
        <thead>
            <tr>
				<th>Codigo_bd</th>
				<th>Cedula</th>
				<th>Nombre</th>
				<th>Placa</th>
				<th>Num. Citacion</th>
				<th>Estado</th>
				<th>Tipificacion</th>
				<th>Todos los Datos</th>
				<th>Eliminar</th>
			</tr>
        </thead>
            <tbody>
				<?php
				    if($a2==='1'){
				        $block = mysqli_query($enlace, "SELECT *,UPPER(CONCAT(u.1er_nombre,' ', u.1er_apellido)) As nombre_as FROM HBOFidelizacion e INNER JOIN usuarios u ON u.id=e.cod_vendedor WHERE placa LIKE '%$a1%'"); 
				    }elseif($a2==='2'){
				        $block = mysqli_query($enlace, "SELECT *,UPPER(CONCAT(u.1er_nombre,' ', u.1er_apellido)) As nombre_as FROM HBOFidelizacion WHERE e INNER JOIN usuarios u ON u.id=e.cod_vendedor nm_citacion LIKE '%$a1%'"); 
				    }elseif($a2==='3'){
				        $block = mysqli_query($enlace, "SELECT *,UPPER(CONCAT(u.1er_nombre,' ', u.1er_apellido)) As nombre_as FROM HBOFidelizacion WHERE e INNER JOIN usuarios u ON u.id=e.cod_vendedor cedula LIKE '%$a1%'"); 
				    } 
				    mysqli_data_seek ($block, 0);
					while($rows=mysqli_fetch_array($block)){
				?>
					<tr>
						<td><?php echo $rows['codigo_bd'] ?></td>
						<td><?php echo $rows['cedula'] ?></td>
						<td><?php echo $rows['nombre'] ?></td>
						<td><?php echo $rows['placa'] ?></td>
						<td><?php echo $rows['nm_citacion'] ?></td>
						<td><?php echo $rows['estado_venta'] ?></td>
						<td><?php echo $rows['motivo_tip2'] ?></td>
						
						<td><a href="#"  id="btnmodal" data-toggle="modal" data-target="#modal-info" data-nom="<?php echo $rows['codigo_bd']?>" data-nom2="<?php echo $rows['nombre']?>" data-cedula="<?php echo $rows['cedula']?>"
						data-placa="<?php echo $rows['placa']?>" data-nmcitacion="<?php echo $rows['nm_citacion']?>" data-fechacitacion="<?php echo $rows['fecha_citacion']?>" data-horacitacion="<?php echo $rows['hora_citacion']?>"
						data-valor="<?php echo $rows['valor']?>" data-telf="<?php echo $rows['telf']?>" data-radar="<?php echo $rows['radar']?>" 
						
						data-asesor="<?php echo $rows['nombre_as']?>" data-fechaatencion="<?php echo $rows['fecha_atencion']?>" data-horaatencion="<?php echo $rows['hora_asignado']?>"
						
						data-estado="<?php echo $rows['estado_venta']?>" data-tipificacion="<?php echo $rows['motivo_tip2']?>" data-agendamiento="<?php echo $rows['fecha_agendamiento']?>" data-contactos="<?php echo $rows['cant_contactos']?>">Ver info</a></td>
						
						<td><button type="button"  id="<?php echo $rows['codigo_bd']. '$' . $rows['cedula']. '$' .$rows['nombre']. '$' .$rows['nm_citacion']  ?>" onClick="pro_pendientes22(this.id);" class="btn btn-info pull-center">Eliminar</button></td>
					</tr>
				<?php
					} 
				?>
            </tbody>
          </table>
          </div> 
            <div class="modal-footer">
                
            </div>

        <div class="modal fade" id="modal-info">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="nombre22">Informaci&oacuten completa:</h4>
              </div>
              <div class="modal-body">

                    <ul>
                       <li><u>DATOS DEL CONTACTADO</u>:</li>
                       <ul>
                           <li>C&oacutedigo BD: <b><input type="text" id="nombre1" style="width:350px; border: 0" ></b></li>
                           <li>Nombre:  <b><input type="text" id="nombreReal" style="width:350px; border: 0" ></b></li>
                           <li>C&eacutedula:  <b><input type="text" id="cedula" style="width:350px; border: 0" ></b></li>
                           <li>Placa:  <b><input type="text" id="placa" style="width:350px; border: 0" ></b></li>
                           <li>Citaci&oacuten:  <b><input type="text" id="nmcitacion" style="width:350px; border: 0" ></b></li>
                           <li>Fecha Citaci&oacuten:  <b><input type="text" id="fechacitacion" style="width:350px; border: 0" ></b></li>
                           <li>Hora Citaci&oacuten:  <b><input type="text" id="horacitacion" style="width:350px; border: 0" ></b></li>
                           <li>valor:  <b><input type="text" id="valor" style="width:350px; border: 0" ></b></li>
                           <li>Tel&eacutefono:  <b><input type="text" id="telf" style="width:350px; border: 0" ></b></li>
                           <li>Radar:  <b><input type="text" id="radar" style="width:350px; border: 0" ></b></li>
                       </ul>
                       <P></P>
                       <li><u>ASESOR QUE ATENDI&Oacute</u>:</li>
                       <ul>        
                           <li>Nombre:  <b><input type="text" id="asesor" style="width:350px; border: 0" ></b></li>
                           <li>Fecha Asignaci&oacuten:  <b><input type="text" id="fechaatencion" style="width:350px; border: 0" ></b></li>
                           <li>Hora Asignaci&oacuten:  <b><input type="text" id="horaatencion" style="width:350px; border: 0" ></b></li>
                       </ul>
                       <P></P>
                       <li><u>ESTADO DEL CASO</u>:</li>
                       <ul>        
                           <li>Estado:  <b><input type="text" id="estado" style="width:350px; border: 0" ></b></li>
                           <li>Tipificaci&oacuten:  <b><input type="text" id="tipificacion" style="width:350px; border: 0" ></b></li>
                           <li>Cantidad de contactos:  <b><input type="text" id="contactos" style="width:350px; border: 0" ></b></li>
                           <li>Fecha Agendamiento:  <b><input type="text" id="agendamiento" style="width:350px; border: 0" ></b></li>
                       </ul>
                    </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>

<!-- DataTables -->
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- page script -->
<script>
   
  $(function () {
    $('#example293341').DataTable( {
        "destroy": true,
        "pageLength": 10,
        "searching": false,
        "lengthChange": false,
        language: {
            "decimal":        "",
            "emptyTable":     "No se encontraron multas",
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


  function pro_pendientes22(id){
      var separa2 = id.split("$");
      var cod_bd = separa2[0];
      var ced = separa2[1];
      var name = separa2[2];
      var citacion = separa2[3];
      var dataString = 'a1=' + cod_bd + '&a2=' + ced + '&a3=' + name + '&a4=' + citacion;
      if (confirm("\xbfEliminar la multa " + cod_bd + "?")){
         document.getElementById(id).disabled = true;
         $('#cp88').hide().html('<button type="button" onclick="javascript:sendForm();" class="btn btn-primary btn-block btn-flat"><img src="assets/img/gif-carga.gif" width="20" height="20"/></button>').fadeIn(10);
         $.ajax({
    		type: 'POST',
			url: '0_SUPERVISORES/transvial_registros/eliminar_registro/eliminar_multas/script_eliminar.php', 
			data:  dataString, 
			success: function(x){
			    if(x==1){
                    alert("Registro eliminado con exito");
				    document.getElementById(id).disabled = false;
				    $('#example293341').DataTable().clear().destroy();
			    }else if(x==7){
                    alert("Inicie sesion nuevamente");
				    document.getElementById(id).disabled = false;
				}
			}
		 });
      }
  }

	$(document).on("click", "#btnmodal",function () {
        var nombre =$(this).data('nom');
        var nombreReal =$(this).data('nom2');
        var cedula =$(this).data('cedula');
        var placa =$(this).data('placa');
        var nmcitacion =$(this).data('nmcitacion');
        var fechacitacion =$(this).data('fechacitacion');
        var horacitacion =$(this).data('horacitacion');
        var valor =$(this).data('valor');
        var telf =$(this).data('telf');
        var radar =$(this).data('radar');
        
        var asesor =$(this).data('asesor');
        var fechaatencion =$(this).data('fechaatencion');
        var horaatencion =$(this).data('horaatencion');
        
        var estado =$(this).data('estado');
        var tipificacion =$(this).data('tipificacion');
        var agendamiento =$(this).data('agendamiento');
        var contactos =$(this).data('contactos');
        
        //se envia
        
        $("#nombre1").val(nombre);
        $("#nombreReal").val(nombreReal);
        $("#cedula").val(cedula);
        $("#placa").val(placa);
        $("#nmcitacion").val(nmcitacion);
        $("#fechacitacion").val(fechacitacion);
        $("#horacitacion").val(horacitacion);
        $("#valor").val(valor);
        $("#telf").val(telf);
        $("#radar").val(radar);
        
        $("#asesor").val(asesor);
        $("#fechaatencion").val(fechaatencion);
        $("#horaatencion").val(horaatencion);
        
        $("#estado").val(estado);
        $("#tipificacion").val(tipificacion);
        $("#agendamiento").val(agendamiento);
        $("#contactos").val(contactos);
        
        
	})


</script>
</body>
</html>

<?php 
  mysqli_close($enlace);
?>
