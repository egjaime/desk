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
    
    if($a2==='1'){
	  $block7 = mysqli_query($enlace, "SELECT * FROM HBOFidelizacion WHERE placa LIKE '%$a1%'"); 
	}elseif($a2==='2'){
	  $block7 = mysqli_query($enlace, "SELECT * FROM HBOFidelizacion WHERE nm_citacion LIKE '%$a1%'"); 
	}elseif($a2==='3'){
	  $block7 = mysqli_query($enlace, "SELECT * FROM HBOFidelizacion WHERE cedula LIKE '%$a1%'"); 
	} 
	mysqli_data_seek ($block7, 0);
	while($rows7=mysqli_fetch_array($block7)){
	    $lin1 = $rows7['codigo_bd'];
		$lin2 = $rows7['cedula'];
		$lin3 = $rows7['nombre'];
		$lin4 = $rows7['placa'];
	    $lin5 = $rows7['telf'];
	    $lin6 = $rows7['cod_vendedor'];
	}
    
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
      <table id="example2933417" class="table table-bordered table-striped">
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
				<th>Añadir</th>
			</tr>
        </thead>
            <tbody>
				<?php
				    if($a2==='1'){
				        $block = mysqli_query($enlace, "SELECT *,UPPER(CONCAT(u.1er_nombre,' ', u.1er_apellido)) As nombre_as FROM HBOFidelizacion e INNER JOIN usuarios u ON u.id=e.cod_vendedor WHERE placa LIKE '%$a1%'"); 
				    }elseif($a2==='2'){
				        $block = mysqli_query($enlace, "SELECT *,UPPER(CONCAT(u.1er_nombre,' ', u.1er_apellido)) As nombre_as FROM HBOFidelizacion e INNER JOIN usuarios u ON u.id=e.cod_vendedor WHERE nm_citacion LIKE '%$a1%'"); 
				    }elseif($a2==='3'){
				        $block = mysqli_query($enlace, "SELECT *,UPPER(CONCAT(u.1er_nombre,' ', u.1er_apellido)) As nombre_as FROM HBOFidelizacion e INNER JOIN usuarios u ON u.id=e.cod_vendedor WHERE cedula LIKE '%$a1%'"); 
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
						
						<td><button type="button" id="cargar_multa" data-toggle="modal" data-target="#myModalExito" data-placa="<?php echo $rows['placa']?>" class="btn btn-info pull-left">Añadir</button></td>
					</tr>
				<?php
					} 
				?>
            </tbody>
          </table>
          </div> 
            <div class="modal-footer">
                
            </div>
            
            <!-- modal -->
                        <div class="modal fade" id="myModalExito">
                                     
                                  <div class="modal-dialog modal-xs">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                            <h4 class="modal-title">Añadir multa a placa: <b><input type="text" id="placa1" style="width:100px; border: 0" ></b></h4>
                                      </div>
                                      <div class="modal-body">
                                         <div class="col-lg-6 col-xs-9">
                                             
                                            <div id="anadir1" class="form-group">
                        						<label>*Boleta:</label>
                        							<div class="input-group">
                        						  <div class="input-group-addon">
                        								<i class="fa fa-user"></i>
                        						  </div>
                        							  <input type="text" class="form-control" id="anadir_boleta" data-mask tabindex="0" maxlength="17">
                        						</div>
                        						<div id="anadir1-1"></div>
                        					</div>
                                             
                                           <div id="anadir3" class="form-group">
                        						<label>*Fecha de infracción:</label>
                        						<div class="input-group">
                            					  <div class="input-group-addon">
                            						<i class="fa fa-calendar"></i>
                            					  </div>
                        						  <input type="text" class="form-control" id="datemask"  maxlength="10" value="" data-mask tabindex="2" >
                        					   </div>
                        					  <div id="anadir3-3"></div>
                        					</div>

                        					
											<div id="anadir5" class="form-group">
												 <label>Observación:</label>
												 <textarea class="form-control" rows="3" id="anadir_obs" placeholder="..." style="resize: none; " data-mask tabindex="5" maxlength="1000">Multa Añadida.</textarea>
											     <div id="anadir5-5"></div>
											</div>
                                             
                                         </div>
                                         <div class="col-lg-6 col-xs-9">
                                             
                                            <div id="anadir2" class="form-group">
                                    			<label>*Multa:</label>
                                    			<select id="anadir_valor"  class="form-control select2" style="width: 100%;" data-mask tabindex="1" onclick="cambio_sva();">
                                    				<option selected="selected" value="" disabled>Seleccione..</option>
                                   				    <option value="$60">$60</option>
                                    				<option value="$118,20">$118,20</option>
                                    				<option value="$120">$120</option>
                                    				<option value="$200">$200</option>
                                    				<option value="$394">$394</option>
                                    				<option value="$400">$400</option>
                                    			</select>
                                    		    <div id="anadir2-2"></div>
                                    		</div>  
                                             
                                             
                        					<div id="anadir4" class="form-group">
                        						<label>*Hora de infracción:</label>
                        						<div class="input-group">
                        						  <div class="input-group-addon">
                        							<i class="fa fa-share-alt"></i>
                        						  </div>
                        					  <input type="text" class="form-control" id="anadir_hora" maxlength="10" data-mask tabindex="3" >
                        						</div>
                        						<div id="anadir4-4"></div>
                        					</div>	
                        					
                                    		<div id="anadir6" class="form-group">
                        						<label>*Radar:</label>
                        						<div class="input-group">
                        						  <div class="input-group-addon">
                        							<i class="fa fa-user"></i>
                        						  </div>
                        					  <input type="text" class="form-control" id="anadir_radar" maxlength="200" data-mask tabindex="6" >
                        						</div>
                        						<div id="anadir6-6"></div>
                        					</div>	
                        

                                    		
                                         	<div class="form-group">
                                               <p class="help-block">* Campos Obligatorios.</p>
                                            </div>
                                    	
                        
                                         </div>
                                         
											<div class="row">
												<div class="col-md-12">
													<div class="col-md-12">
														<div class="box-tools" id="MsjError2" align="center">
															<!–mensaje de error–> 
														</div>
													</div>
												</div>
											</div>
                                         
                                            <table class="table text-center">
                                        	    <tr>
                                                	<td width="49%">
                                            			<button type="button" id="guardar_anadir" data-mask tabindex="6" onClick="anadir_caso();" class="btn btn-info pull-center">Añadir Multa</button>
                                            		</td>
                                        		</tr>
                                        	</table> 
                                      </div>
                                      <div class="modal-footer">
                                        
                                      </div>
                                    </div>
                                    <!-- /.modal-content -->
                                  </div>
                                  <!-- /.modal-dialog -->
                                  
                                  
                                  
                                </div>
                                <!-- /.modal -->
				

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
    $('#example2933417').DataTable( {
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

               //aqui inicia nuevo
               
                $(function () {
					//Datemask dd/mm/yyyy
					$('#datemask').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-aaaa' })
					//hour hh/mm
					$('#datehour').inputmask('hh:mm:ss')
					$('#datehour2').inputmask('hh:mm')
					//hour mm/ss
					$('#tmo').inputmask('s:s')
					//Timepicker
        			$('.timepicker').timepicker({
        			  showInputs: false
        			})

				  })
				
            	$(document).on("click", "#cargar_multa",function () {
                    var placa =$(this).data('placa');
                    //se envia
                    $("#placa1").val(placa);
            	})
                
                function anadir_caso(){
                    
                    var band_anadir1 = 0;
                    var band_anadir2 = 0;
                    var band_anadir3 = 0;
                    var band_anadir4 = 0;
                    var band_anadir5 = 0;
                    if(document.getElementById("anadir_boleta").value==""){
			             $('#MsjError2').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos para continuar (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			             document.getElementById('anadir1').className = "form-group has-error";
			             $('#anadir1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
			             band_anadir1 = 0;
			        }else{
			            document.getElementById('anadir1').className = "form-group has-feedback";
					    $('#anadir1-1').hide().html('').fadeIn(500);
			             band_anadir1 = 1;
			        }
			        
			        if(document.getElementById("anadir_valor").value==""){
			             $('#MsjError2').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos para continuar (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			             document.getElementById('anadir2').className = "form-group has-error";
			             $('#anadir2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
			             band_anadir2 = 0;
			        }else{
			            document.getElementById('anadir2').className = "form-group has-feedback";
					    $('#anadir2-2').hide().html('').fadeIn(500);
			             band_anadir2 = 1;
			        }
			        
			        if(document.getElementById("datemask").value==""){
			             $('#MsjError2').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos para continuar (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			             document.getElementById('anadir3').className = "form-group has-error";
			             $('#anadir3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
			             band_anadir3 = 0;
			        }else{
			            document.getElementById('anadir3').className = "form-group has-feedback";
					    $('#anadir3-3').hide().html('').fadeIn(500);
			             band_anadir3 = 1;
			        }
			        
			        if(document.getElementById("anadir_hora").value==""){
			             $('#MsjError2').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos para continuar (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			             document.getElementById('anadir4').className = "form-group has-error";
			             $('#anadir4-4').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
			             band_anadir4 = 0;
			        }else{
			            document.getElementById('anadir4').className = "form-group has-feedback";
					    $('#anadir4-4').hide().html('').fadeIn(500);
			             band_anadir4 = 1;
			        }
			        
			        if(document.getElementById("anadir_radar").value==""){
			             $('#MsjError2').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos para continuar (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			             document.getElementById('anadir6').className = "form-group has-error";
			             $('#anadir6-6').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
			             band_anadir5 = 0;
			        }else{
			            document.getElementById('anadir6').className = "form-group has-feedback";
					    $('#anadir6-6').hide().html('').fadeIn(500);
			             band_anadir5 = 1;
			        }
			        
			        if(band_anadir1 == 1 && band_anadir2 == 1 && band_anadir3 == 1 && band_anadir4 == 1 && band_anadir5 == 1){
			             if (confirm("\xbfAñadir multa?")){
			                 document.getElementById('guardar_anadir').disabled = true;
                             $('#MsjError2').hide().html('').fadeIn(500);
    			             var dataStringA = 'a1=' + document.getElementById("anadir_boleta").value + '&a2=' + document.getElementById("anadir_valor").value + '&a3=' + document.getElementById("datemask").value + '&a4=' + document.getElementById("anadir_hora").value + '&a5=' + document.getElementById("anadir_obs").value  + '&a6=' + document.getElementById("anadir_radar").value + '&a7=' + "<?php echo $lin1?>" + '&a8=' + "<?php echo $lin3?>" + '&a9=' + "<?php echo $lin2?>" + '&a10=' + "<?php echo $lin4?>" + '&a11=' + "<?php echo $lin5?>" + '&a12=' + "<?php echo $lin6?>";
                             $('#MsjError2').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="25" height="25"/>Añadiendo multa...</p>').fadeIn(500);
    			             $.ajax({
        					     type: 'POST',
        					     url: '0_SUPERVISORES/transvial_registros/anadir_multas/anadir_multas/anadir_multa_new.php', 
        					     data:  dataStringA, 
        					     success: function(x){
        					         $('#MsjError2').hide().html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Agregado!</strong> Multa Añadida..<a href="#" class="alert-link"></a>.</div>').fadeOut(500);
        					         document.getElementById('guardar_anadir').disabled = false;
        					         document.getElementById('anadir_obs').value = "Multa Añadida.";
        					         document.getElementById('anadir_boleta').value = "";
        					         document.getElementById('anadir_valor').value = "";
        					         document.getElementById('datemask').value = "";
        					         document.getElementById('anadir_hora').value = "";
        					         document.getElementById('anadir_radar').value = "";
                                     alert("Multa añadida con exito");
                                     $('#myModalExito').modal('hide');

        					     }
        				      });
			                 
			             }
			        }
                    
                }
				
				//aqui termina otro
				

  function pro_pendientes22(id){
      var separa2 = id.split("$");
      var cod_bd = separa2[0];
      var ced = separa2[1];
      var name = separa2[2];
      var cita = separa2[3];
      if (confirm("\xbfContinuar y gestionar?")){
         document.getElementById(id).disabled = true;
         $('#cp88').hide().html('<button type="button" onclick="javascript:sendForm();" class="btn btn-primary btn-block btn-flat"><img src="assets/img/gif-carga.gif" width="20" height="20"/></button>').fadeIn(10);
         $("#content1").load('0_SUPERVISORES/transvial_registros/modificar_multas/modificar_multas/script_modificar.php', {aa1: ced, aa2: name, aa3: cod_bd, aa4: cita});
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
