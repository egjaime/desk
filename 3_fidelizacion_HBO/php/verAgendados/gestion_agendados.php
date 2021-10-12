<?php
  session_start();
  date_default_timezone_set("America/Guayaquil"); 
  include '../../../php/conexion_bd.php';
  
   $a1 = $_POST['aa2']; //nombre
   $a2 = $_POST['aa1']; //cedula
   $a3 = $_POST['aa3']; //codigo
  
  
  if(!empty($_SESSION['id'])){ 
  //valido si el usuario esta bloqueado
  		$trx="SELECT activo FROM usuarios WHERE id={$_SESSION['id']}";  
		$resB=mysqli_query($enlace,$trx);
		$filaB = mysqli_fetch_array($resB);
		if ($filaB['activo'] != 3){
		    
		  $user1 = mysqli_query($enlace, "SELECT usuario FROM usuarios WHERE id={$_SESSION['id']}");
          mysqli_data_seek ($user1, 0);
          $res22=mysqli_fetch_array($user1);
?>


			<!DOCTYPE html>
			<html>
			<head>
			  <meta charset="utf-8">
			  <meta http-equiv="X-UA-Compatible" content="IE=edge">
			  <title>Formularios - Gestion Agendados</title>
			  <!-- Tell the browser to be responsive to screen width -->
			  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

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

			<!-- Bootstrap time Picker -->
		     <link rel="stylesheet" href="assets/plugins/timepicker/bootstrap-timepicker.min.css">
		     <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
		       <!-- bootstrap datepicker -->
             <link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

            

			</head>
			<body class="hold-transition skin-blue sidebar-mini">

				<div class="loader2" id="loader2"></div>

				<section class="content-header">
				  <h1>
					Gestión Agendado HBO: <b id="etiquetaB" value="<?php echo $a3 ?>"><?php echo $a3 ?></b>
				  </h1>
				  <ol class="breadcrumb">
					<li><a href="menu3.php"><i class="fa fa-dashboard"></i> Principal</a></li>
					<li class="active">Gestión Agendados HBO</li>
				  </ol>
				</section>
				<form action="" method="post" enctype="multipart/form-data" name="addU" id="addU">
					<!-- Main content -->
					<section class="content" >
					  <!-- SELECT2 EXAMPLE -->
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="box box-default">
									<!-- /.box-header -->
									<div class="box-body">
										<div class="row">
											<!-- /.columna izquierda -->
											<div class="col-md-6">
											    

												<div id="id1" class="form-group">
													<label>Cédula:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-list-alt"></i>
													  </div>
													  <input type="text" class="form-control" id="cedula" data-mask tabindex="1" value="<?php echo $a2 ?>">
													</div>
													<div id="id1-1"></div>
												</div>
												
												<div id="id8" class="form-group">
													 <label>Observación:</label>
													 <textarea class="form-control" rows="2" id="observacion" placeholder="..." style="resize: none; " data-mask tabindex="13" maxlength="500"></textarea>
												     <div id="id8-8"></div>
												</div>
												
												<div id="obli_1" style="display: none">	
    												<div class="form-group">
                                                      <p class="help-block">* Campos Obligatorios.</p>
                                                    </div>
                                                </div>

									</div>
											
											
											
											<!-- /.columna derecha -->
											<div class="col-md-6">
											    
											    
											    <div id="id5" class="form-group">
													<label>Nombre del cliente:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-user"></i>
													  </div>
													  <input type="text" class="form-control" id="nombre" data-mask tabindex="2" value="<?php echo $a1 ?>">
													</div>
													<div id="id5-5"></div>
												</div>
										
											
												<div id="id7" class="form-group">
													<label>*Estado de la venta:</label>
													<select id="rol" onchange="pro_estado();" class="form-control select2" style="width: 100%;" data-mask tabindex="6">
													<option selected="selected" value="" disabled>Seleccione..</option>
													  <option value="Venta Efectiva">Venta Efectiva</option>
													  <option value="No Contesta">No Contesta</option>
													  <option value="Agendamiento">Agendamiento</option>
													  <option value="No Desea">No Desea</option>
													  <option value="Numero Equivocado">Número Equivocado</option>

													</select>
													<div id="id7-7"></div>
												</div>
											
												
											    <div id="casos_agendamiento" style="display: none">	
    												   <div id="id11" class="form-group">
                                                            <label>*Fecha:</label>
                                            
                                                            <div class="input-group date">
                                                              <div class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                              </div>
                                                              <input type="text" class="form-control pull-right" id="datepicker">
                                                            </div>
                                                            <div id="id11-11"></div>
                                                      </div>
                                                      
                                                      <div id="id12" class="form-group">
                                                          <label>*Hora:</label>
                                        
                                                          <div class="input-group">
                                                            <input type="text" class="form-control timepicker" id="timepicker" value="">
                                        
                                                            <div class="input-group-addon">
                                                              <i class="fa fa-clock-o"></i>
                                                            </div>
                                                          </div>
                                                          <div id="id12-12"></div>
                                                        </div>
                                                        
                                                </div>

                                                <div id="id13" style="display: none">	
												   <div class="form-group">
    													<label>*Motivo No Desea:</label>
    													<select id="no_desea" onchange="pro_Nodesea();" class="form-control select2" style="width: 100%;" data-mask tabindex="6">
    													<option selected="selected" value="" disabled>Seleccione..</option>
    													  <option value="Problemas Economicos">Problemas Económicos</option>
    													  <option value="Ya Posee HBO">Ya Posee HBO</option>
    													  <option value="Muy Costoso">Muy Costoso</option>
    													  <option value="No ve tanta TV">No ve tanta TV</option>
    													  <option value="Problemas Tecnicos">Problemas Técnicos</option>
                                                          <option value="No da razon">No da razón</option>
                                                          <option value="Cliente cuelga la llamada">Cliente cuelga la llamada</option>
    													</select>
    													<div id="id13-13"></div>
    												</div>
                                                </div>
                                                
                                                <div id="obli_2">	
    												<div class="form-group">
                                                      <p class="help-block">* Campos Obligatorios.</p>
                                                    </div>
                                                </div>


											</div>
											
											<div class="row">
												<div class="col-md-12">
													<div class="col-md-12">
														<div class="box-tools" id="MsjError" align="center">
															<!–mensaje de error–> 
														</div>
													</div>
												</div>
											</div>
											
											<table class="table text-center">
												<tr>
													<td width="49%">
														<button type="button" id="cancelHBO" onClick="cancel12();" class="btn btn-info pull-right">Cancelar</button>
													</td>
													<td width="2%">	
													</td>
													<td width="49%">
														<button type="button" id="guardarHBO" onClick="guardar80();" class="btn btn-info pull-left">Guardar</button>
													 </td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
							
												
					</section>

				</form>
                  
                 
				<script src="assets/plugins/input-mask/jquery.inputmask.js"></script>
				<script src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
		    	<script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
		    	<!-- bootstrap datepicker -->
	            <script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
		    	

				<script>
				
				function cancel12(){
                    if (confirm("\xbfCancelar y regresar?")){
                       	$("#content1").load('3_fidelizacion_HBO/php/verAgendados/mis_agendados.php');
                       	pro_charge2();
        				pro_charge3();
                    }
                }
				
                var parrafo = document.getElementById('etiquetaB');
                var contenido = parrafo.innerHTML;
                //alert(contenido);
                
				//Date picker
                $('#datepicker').datepicker({
                  autoclose: true
                })
                
                $(function () {
					//Datemask dd/mm/yyyy
					$('#datemask').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-aaaa' })
					//hour hh/mm
					$('#datehour').inputmask('hh:mm')
					$('#datehour2').inputmask('hh:mm')
					//hour mm/ss
					$('#tmo').inputmask('s:s')
					//Timepicker
        			$('.timepicker').timepicker({
        			  showInputs: false
        			})

				  })

                function pro_reiniciar(){
                    document.getElementById('id7').className = "form-group has-feedback";
                    $('#id7-7').hide().html('').fadeIn(500);
                    
                    //agendamiento hoya y fecha
                    document.getElementById('id11').className = "form-group has-feedback";
                    $('#id11-11').hide().html('').fadeIn(500);
                    document.getElementById('id12').className = "form-group has-feedback";
                    $('#id12-12').hide().html('').fadeIn(500);
                    
                    //no desea
                    document.getElementById('id13').className = "form-group has-feedback";
                    $('#id13-13').hide().html('').fadeIn(500);
                    
                    $('#MsjError').hide().html('').fadeIn(500);
                }
                
                function pro_Nodesea(){
                    pro_reiniciar();
                }
                    
                
				function pro_estado(){
				    if(document.getElementById("rol").value=="Agendamiento"){
				        document.getElementById('id13').style.display ='none';
				        document.getElementById('casos_agendamiento').style.display ='inherit';
				        document.getElementById('obli_1').style.display ='inherit';
				        document.getElementById('obli_2').style.display ='none';
				        pro_reiniciar();
				    }else if(document.getElementById("rol").value=="No Desea"){
				        document.getElementById('casos_agendamiento').style.display ='none';
				        document.getElementById('id13').style.display ='inherit';
				        document.getElementById('obli_1').style.display ='inherit';
				        document.getElementById('obli_2').style.display ='none';
				        pro_reiniciar();
				    }else if(document.getElementById("rol").value=="Venta Efectiva" || document.getElementById("rol").value=="No Contesta" || document.getElementById("rol").value=="Numero Equivocado"){
				        document.getElementById('id13').style.display ='none';
				        document.getElementById('casos_agendamiento').style.display ='none';
				        document.getElementById('obli_1').style.display ='none';
				        document.getElementById('obli_2').style.display ='inherit';
				        pro_reiniciar();
				    }
				}
				

				document.oncontextmenu = function(){return false}
				
			     function guardar80(){
			         var band = 0;
			         //se hacen las validaciones segun el caso.
			         if(document.getElementById("rol").value==""){
			             $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Seleccione Estado de la Venta (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			             document.getElementById('id7').className = "form-group has-error";
			             $('#id7-7').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione una opción</span>').fadeIn(500);
			             band = 0;
			         }else if(document.getElementById("rol").value=="Agendamiento"){
                         if(document.getElementById("datepicker").value==""){
                            $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos de Agendamiento (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			                document.getElementById('id11').className = "form-group has-error";
			                $('#id11-11').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione Fecha</span>').fadeIn(500);
                            band = 0;
                         }else{
                             pro_reiniciar();
                             band = 1;
                         }
                         if(document.getElementById("timepicker").value==""){
                            $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos de Agendamiento (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			                document.getElementById('id12').className = "form-group has-error";
			                $('#id12-12').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione Hora</span>').fadeIn(500);
                            band = 0;
                         }else{
                             band = 1;
                         }
			         }else if(document.getElementById("rol").value=="No Desea"){
			             if(document.getElementById("no_desea").value==""){
			                $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos de No desea (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			                document.getElementById('id13').className = "form-group has-error";
			                $('#id13-13').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione motivo</span>').fadeIn(500);
                            band = 0;
			             }else{
			                 pro_reiniciar();
                             band = 1;
			             }
			 
			         }else if(document.getElementById("rol").value=="No Contesta"){
			             band = 1;
			         }else if(document.getElementById("rol").value=="Venta Efectiva"){
			             band = 1;
			         }else if(document.getElementById("rol").value=="Numero Equivocado"){
			             band = 1;
			         }
			         
			         if(band == 1){
			             if (confirm("\xbfGuardar registro?")){
			                 document.getElementById('guardarHBO').disabled = true;
			                 var rol = "";
			                 //converto a numero la opcion elegida
                             if(document.getElementById("rol").value == "Venta Efectiva"){
                                rol = 1;
                             }else if(document.getElementById("rol").value == "No Contesta"){
                                rol = 2;
                             }else if(document.getElementById("rol").value == "Agendamiento"){
                                rol = 3; 
                             }else if(document.getElementById("rol").value == "No Desea"){
                                rol = 4; 
                             }else if(document.getElementById("rol").value == "Numero Equivocado"){
                                rol = 5; 
                             }
                                 
			                 
			                 $('#MsjError').hide().html('').fadeIn(500);
    			             var dataString = 'a1=' + rol + '&a2=' + document.getElementById("rol").value + '&a3=' + document.getElementById("datepicker").value + '&a4=' + document.getElementById("timepicker").value + '&a5=' + document.getElementById("no_desea").value  + '&a6=' + document.getElementById("observacion").value + '&a7=' + contenido;
    				         document.getElementById('guardarHBO').disabled = true;
                             $('#MsjError').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="25" height="25"/>Guardando datos...</p>').fadeIn(500);
    			             $.ajax({
        					     type: 'POST',
        					     url: '3_fidelizacion_HBO/php/verAgendados/guardar_agendado.php', 
        					     data:  dataString, 
        					     success: function(x){
        					         $('#MsjError').hide().html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Guardado!</strong> Redireccionando..<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
        					         document.getElementById('cancelHBO').disabled = true;
        					         document.getElementById('guardarHBO').disabled = true;
        					         document.getElementById('observacion').value = "";
        					         document.getElementById('nombre').value = "";
        					         document.getElementById('cedula').value = "";
        					         document.getElementById("datepicker").value = "";
        					         document.getElementById("timepicker").value = "";
        					         document.getElementById("no_desea").value = "";
        					         document.getElementById('rol').value = "";
        					         document.getElementById('id13').style.display ='none';
            				         document.getElementById('casos_agendamiento').style.display ='none';
            				         document.getElementById('obli_1').style.display ='none';
            				         document.getElementById('obli_2').style.display ='inherit';
            				         document.getElementById('rol').disabled = true;
            				         document.getElementById('observacion').disabled = true;
            				         setTimeout($("#content1").load('3_fidelizacion_HBO/php/verAgendados/mis_agendados.php'),8000);
        					         pro_charge2();
        					         pro_charge3();
        					     }
        				      });
			             }//if pregunta guardar 
    			    }//if de la bandera band==1?
			     }//guardar12
			     

				$('#loader2').fadeOut(1500);
				camp1.focus();
				</script>

			</body>
			</html>


<?php
        }else{//else del validar si esta bloqueado.
		    session_destroy();
			echo '<script language =  javascript>  alert("Usuario Bloqueado, contacte al administrador"); self.location = "index.php"; </script>';
		}
	}else{
	   echo '<script language =  javascript>  self.location = "index.php" </script>';
	}
	mysqli_close($enlace);
?>