<?php
    session_start();
    include '../../php/conexion_bd.php';
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

</head>

    <div class="modal-body"> 
      <table id="example00x" class="table table-bordered table-striped">
        <thead>
            <tr>
				<th>Fecha</th>
				<th>N. Servicio</th>
				<th>Observacion</th>
				<th>Acciones</th>
			</tr>
            </thead>
            <tbody>
				<?php
					$block = mysqli_query($enlace, "SELECT * FROM retenciones WHERE id_user='{$_SESSION['id']}' AND estado=3");
					mysqli_data_seek ($block, 0);
					while($rows=mysqli_fetch_array($block)){
				?>
					<tr id="<?php echo $rows['id']?>">
						<td><?php echo $rows['fecha_hora'] ?></td>
						<td><?php echo $rows['num_serv'] ?></td>
						<td><?php echo $rows['observacion'] ?></td>
						<td><div align="center" id="<?php echo $rows['idF']?>" style="display:none"><i class="fa fa-refresh fa-spin"/></div><div align="center" id="<?php echo $rows['idG']?>"><a href="#"><img  src="assets/img/eliiminar.png" onclick="alerta(<?php echo $rows['id']?>);"  width="15" height="15" title="Eliminar Ticket pendiente"></a></div></td>
					</tr>
				<?php
					} 
				?>
            </tbody>
          </table>
          </div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>

<!-- page script -->
<script>
   
  $(function () {
    $('#example00x').DataTable( {
        "destroy": true,
        "pageLength": 5,
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
  
    function alerta(id){
        var idF = id + "ID";
        var idG = id + "IF";
        if (confirm("\xbfEliminar pendiente?")){
            var textoEscrito = prompt("Ticket Omnicanal:", "");
            if(textoEscrito != null){
            	if(textoEscrito == ""){
            	    alert("Debe indicar el numero de omnicanal.");
            	}else if(isNaN(textoEscrito)==true){
            	    alert("Ticket incorrecto.");
            	}else{
            	    document.getElementById(idG).style.display = 'none';
                    document.getElementById(idF).style.display = '';
                    var dataString = 'a1=' + id + '&a2=' + textoEscrito;
        		        $.ajax({
        					type: 'POST',
        					url: 'php/user/gestiondiaria/val_act_pen.php', 
        					data:  dataString,
        					success: function(x){
                                if(x==1){
        					        $("#" + id).fadeOut(800);
        					        pro_charge();
        					    }else if(x==2){
        					        alert("Ticket repetido en Omnicanal. Valide e intente nuevamente.");
        					        document.getElementById(idF).style.display = 'none';
        					        document.getElementById(idG).style.display = '';
        					    }else{
        					        alert("ERROR!..Contacte al Admnistrador. Msj Server: " + x + "Datos enviados: id" + id + " id9" + id9 +" id3" + id3 + " idF" + idF);
        					        document.getElementById(idF).style.display = 'none';
        					        document.getElementById(idG).style.display = '';
        					    }
        					}
        		        });
                }
            }
        }
    }

    
    function descargar_excel(x){
       self.location = "php/user/gestiondiaria/download_excel.php?a1=" + x.id;
    }
  

</script>
</body>
</html>

<?php 
  mysqli_close($enlace);
?>