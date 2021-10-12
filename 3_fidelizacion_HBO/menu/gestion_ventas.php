<?php
  //sleep(1);
  session_start();
  date_default_timezone_set("America/Guayaquil"); 
  include '../../php/conexion_bd.php';
  
  
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
			  <title>Formularios - Gestion Diaria</title>
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
					Gestión Cobranzas Transvial
				  </h1>
				  <ol class="breadcrumb">
					<li><a href="menu3.php"><i class="fa fa-dashboard"></i> Principal</a></li>
					<li class="active">Gestión Cobranzas Transvial</li>
				  </ol>
				</section>
				<form action="" method="post" enctype="multipart/form-data" name="addU" id="addU">
					<!-- Main content -->
					<section class="content" >
					  <!-- SELECT2 EXAMPLE -->
						<div class="row">
							<div class="col-md-1"></div>
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
													  <input type="text" class="form-control" id="cedula" data-mask tabindex="1" readonly="readonly">
													</div>
													<div id="id1-1"></div>
												</div>
												
												<div id="id3" class="form-group">
													<label>Placa:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-automobile (alias)"></i>
													  </div>
													  <input type="text" class="form-control" id="contrato" data-mask tabindex="3" readonly="readonly">
													</div>
													<div id="id3-3"></div>
												</div>
												
												<div id="id4" class="form-group">
													<label>Fecha de Citación:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-calendar-check-o "></i>
													  </div>
													  <input type="text" class="form-control" id="telf2" data-mask tabindex="5" readonly="readonly">
													</div>
													<div id="id4-4"></div>
												</div>
												
												<div id="id10" class="form-group">
													<label>Radar:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-video-camera"></i>
													  </div>
													  <input type="text" class="form-control" id="radar" data-mask tabindex="7" readonly="readonly">
													</div>
													<div id="id10-10"></div>
												</div>
												
												<div id="id22" class="form-group">
													<label>Días en Mora:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-server"></i>
													  </div>
													  <input type="text" class="form-control" id="mora" data-mask tabindex="9" readonly="readonly">
													</div>
													<div id="id22-22"></div>
												</div>
												

												<div id="id8" class="form-group">
													 <label>Observación:</label>
													 <textarea class="form-control" rows="4" id="observacion" placeholder="..." style="resize: none; " data-mask tabindex="11" maxlength="1000" disabled="true"></textarea>
												     <div id="id8-8"></div>
												</div>
												
												<div id="casos_agendamiento2" style="display: none">	
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
													<label>Propietario:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-user"></i>
													  </div>
													  <input type="text" class="form-control" id="nombre" data-mask tabindex="2" readonly="readonly">
													</div>
													<div id="id5-5"></div>
												</div>
										
										        <div id="id6" class="form-group">
													<label>Nº Citación:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-file-text-o"></i>
													  </div>
													  <input type="text" class="form-control" id="telf1" data-mask tabindex="4" readonly="readonly">
													</div>
													<div id="id6-6"></div>
												</div>
												
												<div id="id9" class="form-group">
													<label>Hora Citación:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-clock-o"></i>
													  </div>
													  <input type="text" class="form-control" id="telf3" data-mask tabindex="6" readonly="readonly">
													</div>
													<div id="id9-9"></div>
												</div>
												
												<div id="id20" class="form-group">
													<label>Valor Deuda:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-dollar (alias)"></i>
													  </div>
													  <input type="text" class="form-control" id="valor" data-mask tabindex="8" readonly="readonly">
													</div>
													<div id="id20-20"></div>
												</div>
												
												<div id="id21" class="form-group">
													<label>Teléfono Contacto:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-phone"></i>
													  </div>
													  <input type="text" class="form-control" id="Telefono" data-mask tabindex="10" readonly="readonly">
													</div>
													<div id="id21-21"></div>
												</div>
											
												<div id="id7" class="form-group">
													<label>*Estado de la transacción:</label>
													<select id="rol" onchange="pro_estado();" class="form-control select2" style="width: 100%;" data-mask tabindex="12" disabled="true">
													<option selected="selected" value="" disabled>Seleccione..</option>
													  <option value="EXITOSO">Exitoso</option>
													  <option value="EXITOSO CONVENIO">Exitoso Convenio</option>
													  <option value="NO APLICA">No Aplica</option>
													  <option value="NO EXITOSO">No Exitoso</option>
													  <option value="PENDIENTE">Pendiente</option>
													</select>
													<div id="id7-7"></div>
												</div>
											
												

                                                <div id="id13" style="display: none">	
												   <div class="form-group">
    													<label>*Motivo No Exitoso:</label>
    													<select id="no_desea" onchange="mot_pendinte2();" class="form-control select2" style="width: 100%;" data-mask tabindex="6">
    													<option selected="selected" value="" disabled>Seleccione..</option>
    													  <option value="SIN ACUERDO">Sin Acuerdo</option>
    													  <option value="NO CONTACTADO">No Contactado</option>
    													  <option value="INFORMACION CONVENIO">Informacion Convenio</option>
    													</select>
    													<div id="id13-13"></div>
    												</div>
                                                </div>
                                                
                                                <div id="id14" style="display: none">	
												   <div class="form-group">
    													<label>*Motivo No Aplica:</label>
    													<select id="no_aplica" onchange="pro_Nodesea();" class="form-control select2" style="width: 100%;" data-mask tabindex="6">
    													<option selected="selected" value="" disabled>Seleccione..</option>
    													  <option value="FALLECIDO">Fallecido</option>
    													  <option value="MULTA ANULADA">Multa Anulada</option>
    													  <option value="MULTA DUPLICADA">Multa Duplicada</option>
    													  <option value="YA PAGO">Ya Pagó</option>
    													  <option value="YA TIENE CONVENIO">Ya tiene convenio</option>
    													</select>
    													<div id="id14-14"></div>
    												</div>
                                                </div>
                                                <div id="id15" style="display: none">	
												   <div class="form-group">
    													<label>*Motivo Pendiente:</label>
    													<select id="mot_pendinte2" onchange="pro_estado2();" class="form-control select2" style="width: 100%;" data-mask tabindex="6">
    													<option selected="selected" value="" disabled>Seleccione..</option>
    													  <option value="VOLVER A LLAMAR">Volver a llamar</option>
    													  <option value="CONTESTA TERCERA PERSONA">Contesta 3era persona</option>
    													  <option value="BUZON DE MENSAJE">Buzon de mensaje</option>
    													  <option value="ACUERDO DE PAGO">Acuerdo de Pago</option>
    													  <option value="DATA MINING">Data Mining</option>
    													  <option value="IMPUGNACION">Impugnacion</option>
    													  <option value="VENTA DE AUTO">Venta de auto</option>
    													</select>
    													<div id="id15-15"></div>
    												</div>
                                                </div>
                                                
                                                <div id="casos_agendamiento" style="display: none">	
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
														<button type="button" data-mask tabindex="15" id="save" onClick="addcase();" class="btn btn-info pull-right" disabled="true">Guardar</button>
													</td>
													<td width="2%">	
													</td>
													<td width="49%">
														<button type="button" data-mask tabindex="14" id="next" onClick="addnext();" class="btn btn-info pull-left">Asignar</button>
													 </td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
							
												
					  <!--------------------------- campo de datos --------------------------------->
						<div class="row">
						    <div class="col-md-4"></div>
							<div class="col-md-4">
								 <div class="box box-default">
                                    <div class="box-header with-border">
                                            <form class="form-horizontal">    
                                                <div id="ver1" class="form-group">
                                                    <label for="rag1" class="col-sm-2 control-label" style="padding-top: 6px;">Rango:</label>
													<div class="pull-center col-sm-8">
                                                    
													<select id="refresh"  onchange="pro_refreshHBO();" class="form-control select2" style="width: 100%;">
												      <option selected="selected" value="0">Hoy</option>
													  <option value="1">Ayer</option>
													  <option value="2">Mes Actual</option>
													  <option value="3">Mes Anterior</option>
													  
     												</select>
                                                    
													</div>
													&nbsp;&nbsp;&nbsp;
											
													<a href="#" id="iconact"><i id="refresh10" style="display:none" class="fa fa-refresh fa-spin"></i><i id="refresh11" class="fa fa-refresh" onClick="pro_refreshHBO();"  style="padding-top: 10px; padding-left: 5px;" title="Actualizar"></i></a>
												</div>
											</form>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                      <div class="row">
                                        <div class="col-md-12">
                                            
                                            <ul class="nav nav-pills nav-stacked">
                                               <li><a href="#">Total Casos
                                              <span  id="stotal" class="pull-right text-green">  
                                                <i class="fa fa-refresh fa-spin"></i>
                                              </span></a></li>
                                            </ul>
                                            
                                         </div>
                                          <!-- ./chart-responsive -->
                                        </div>
                                        <!-- /.col -->
                                          
                                        <!-- /.col -->
                                      </div>
                                      <!-- /.row -->
                                    </div>
                                    <!-- /.box-body -->
								
								
								 <div class="box box-default">
                                    <!-- /.box-header -->
                                    <div class="box">
                                        <!-- /.box-header -->
                                        <div class="box-body no-padding">
                                          <table class="table">
                                            <tr>
                                              <th></th>
                                              <th>Estado</th>
                                              <th>Cantidad</th>
                                              <th></th>
                                              <th>Porc.</th>
                                              
                                            </tr>
                                            <ul class="nav nav-pills nav-stacked">
                                            <tr>
                                            
                                              <td></td>
                                              <td>Exitosos/Exitosos Convenio</td>
                                              <td><span id="scerrado" style="padding: 22px;"><i class="fa fa-refresh fa-spin"></i></span></td>
                                              <td></td>
                                              <td><span id="scerradoP" class="badge bg-green">-</span></td>
                                           
                                            </tr>
                                            </ul>
                                            
   
                                            <tr>
                                              <td></td>
                                              <td>No aplican</td>
                                              <td><span id="sinteraccion" style="padding: 22px;"><i class="fa fa-refresh fa-spin"></i></span></td>
                                              <td></td>
                                              <td><span id="sinteraccionP" class="badge bg-pink">-</span></td>
                                            </tr>

                            				<tr>
                                              <td></td>
                                              <td>No Exitosos</td>
                                              <td><span id="saudio" style="padding: 22px;"><i class="fa fa-refresh fa-spin"></i></span></td>
                                              <td></td>
                                              <td><span id="saudioP" class="badge bg-red">-</span></td>

                                            </tr>

                                            
                                            <tr>
                                              <td></td>
                                              <td>Pendientes (Cerrados)</td>
                                              <td><span id="snocontesta" style="padding: 22px;"><i class="fa fa-refresh fa-spin"></i></span></td>
                                              <td></td>
                                              <td><span id="snocontestaP" class="badge bg-blue">-</span></td>

                                            </tr>

                                            <tr>
                                              <td></td>
                                              <td>Pendientes (Agendados)</td>
                                              <td><span id="snoexitosop" style="padding: 22px;"><i class="fa fa-refresh fa-spin"></i></span></td>
                                              <td></td>
                                              <td><span id="snoexitosopP" class="badge bg-yellow">-</span></td>

                                            </tr>

                                            <tr>
                                              <td></td>
                                              <td></td>
                                              <td><a href="#" onClick="pro_carga();" id="ver_des" data-toggle="modal" data-target="#modal-defaultG" title="Ver / Descargar" style="display: none">Ver detalle</a></td>
                                              <td></td>
                                              <td></td>
                                            </tr>

                                          </table>

                                        </div>
                                            
                                        <!-- /.box-body -->
                                      </div>
                                    </div>
                                    <!-- /.box-body -->

								
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
				
				pro_refreshHBO();
				
				function pro_refreshHBO(){
				    $('#stotal').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
				    $('#scerrado').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
			        $('#sinteraccion').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
			        $('#saudio').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
			        $('#snocontesta').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
			        $('#snoexitosop').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);


                    var dataString = 'a1=' + document.getElementById("refresh").value;
			        $.ajax({
						type: 'POST',
						url: '3_fidelizacion_HBO/php/val_refresh.php', 
						data:  dataString, 
						success: function(x){

						    if(x.split('_')[5] != 0){
    						       document.getElementById("stotal").innerHTML = x.split('_')[5];
                            }else{
                                document.getElementById("stotal").innerHTML = "0";
                            }

						    
							document.getElementById("scerrado").innerHTML = x.split('_')[0];
							
								if(x.split('_')[0] != 0){
						            var sntT = x.split('_')[0] * 100 / x.split('_')[5];
    						    	sntT = sntT.toFixed(1);
						            document.getElementById("scerradoP").innerHTML = sntT + "%";
						        }else{
						            if (x.split('_')[0] == 0){
						               document.getElementById("scerradoP").innerHTML = "-";
						            }else{
						               document.getElementById("scerradoP").innerHTML = "0.0%";
						            }
						        }
						        

							document.getElementById("sinteraccion").innerHTML = x.split('_')[1];
							
								if(x.split('_')[1] != 0){
						            var sntT = x.split('_')[1] * 100 / x.split('_')[5];
    						    	sntT = sntT.toFixed(1);
						            document.getElementById("sinteraccionP").innerHTML = sntT + "%";
						        }else{
						            if (x.split('_')[1] == 0){
						               document.getElementById("sinteraccionP").innerHTML = "-";
						            }else{
						               document.getElementById("sinteraccionP").innerHTML = "0.0%";
						            }
						        }	
						        
							document.getElementById("saudio").innerHTML = x.split('_')[2];
							
								if(x.split('_')[2] != 0){
						            var sntT = x.split('_')[2] * 100 / x.split('_')[5];
    						    	sntT = sntT.toFixed(2);
						            document.getElementById("saudioP").innerHTML = sntT + "%";
						        }else{
						            if (x.split('_')[2] == 0){
						               document.getElementById("saudioP").innerHTML = "-";
						            }else{
						               document.getElementById("saudioP").innerHTML = "0.0%";
						            }
						        }	
						        
						        
							document.getElementById("snocontesta").innerHTML = x.split('_')[3];
							
								if(x.split('_')[3] != 0){
						            var sntT = x.split('_')[3] * 100 / x.split('_')[5];
    						    	sntT = sntT.toFixed(2);
						            document.getElementById("snocontestaP").innerHTML = sntT + "%";
						        }else{
						            if (x.split('_')[3] == 0){
						               document.getElementById("snocontestaP").innerHTML = "-";
						            }else{
						               document.getElementById("snocontestaP").innerHTML = "0.0%";
						            }
						        }	
						        
							document.getElementById("snoexitosop").innerHTML = x.split('_')[4];
							
								if(x.split('_')[4] != 0){
						            var sntT = x.split('_')[4] * 100 / x.split('_')[5];
    						    	sntT = sntT.toFixed(2);
						            document.getElementById("snoexitosopP").innerHTML = sntT + "%";
						        }else{
						            if (x.split('_')[4] == 0){
						               document.getElementById("snoexitosopP").innerHTML = "-";
						            }else{
						               document.getElementById("snoexitosopP").innerHTML = "0.0%";
						            }
						        }	
						       
						        
						}//if del success
					});

				}
				
				
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
                    
                    //agendamiento hora y fecha
                    document.getElementById('id11').className = "form-group has-feedback";
                    $('#id11-11').hide().html('').fadeIn(500);
                    document.getElementById('id12').className = "form-group has-feedback";
                    $('#id12-12').hide().html('').fadeIn(500);
                    
                    //no desea
                    document.getElementById('id13').className = "form-group has-feedback";
                    $('#id13-13').hide().html('').fadeIn(500);

                    //no aplica
                    document.getElementById('id14').className = "form-group has-feedback";
                    $('#id14-14').hide().html('').fadeIn(500);

                    //no aplica
                    document.getElementById('id15').className = "form-group has-feedback";
                    $('#id15-15').hide().html('').fadeIn(500);
                    
                    $('#MsjError').hide().html('').fadeIn(500);
                }
                
                function pro_Nodesea(){
                    pro_reiniciar();
                }
                    
                
				function pro_estado(){
				    if(document.getElementById("rol").value=="PENDIENTE"){
				        document.getElementById('id13').style.display ='none';
				        document.getElementById('id14').style.display ='none';
				        document.getElementById('mot_pendinte2').style.display ='inherit';
				        document.getElementById('casos_agendamiento').style.display ='none';
				        document.getElementById('casos_agendamiento2').style.display ='none';
				        document.getElementById('id15').style.display ='inherit';
				        document.getElementById('obli_1').style.display ='inherit';
				        document.getElementById('obli_2').style.display ='none';
				        document.getElementById("timepicker").value="";
				        document.getElementById("no_desea").value="";
				        document.getElementById("no_aplica").value="";
				        document.getElementById("mot_pendinte2").value="";
				        pro_reiniciar();
				    }else if(document.getElementById("rol").value=="NO APLICA"){
				        document.getElementById('casos_agendamiento').style.display ='none';
				        document.getElementById('casos_agendamiento2').style.display ='none';
				        document.getElementById('mot_pendinte2').style.display ='none';
				        document.getElementById('id13').style.display ='none';
				        document.getElementById('id14').style.display ='inherit';
				        document.getElementById('id15').style.display ='none';
				        document.getElementById('obli_1').style.display ='inherit';
				        document.getElementById('obli_2').style.display ='none';
				        document.getElementById("timepicker").value="";
				        document.getElementById("datepicker").value="";
				        document.getElementById("no_aplica").value="";
				        document.getElementById("no_desea").value="";
				        pro_reiniciar();
				    }else if(document.getElementById("rol").value=="NO EXITOSO"){
				        document.getElementById('casos_agendamiento').style.display ='none';
				        document.getElementById('casos_agendamiento2').style.display ='none';
				        document.getElementById('mot_pendinte2').style.display ='none';
				        document.getElementById('id13').style.display ='inherit';
				        document.getElementById('id14').style.display ='none';
				        document.getElementById('id15').style.display ='none';
				        document.getElementById('obli_1').style.display ='inherit';
				        document.getElementById('obli_2').style.display ='none';
				        document.getElementById("timepicker").value="";
				        document.getElementById("datepicker").value="";
				        document.getElementById("no_desea").value="";
				        document.getElementById("no_aplica").value="";
				        pro_reiniciar();
				    }else if(document.getElementById("rol").value=="EXITOSO" || document.getElementById("rol").value=="EXITOSO CONVENIO"){
				        document.getElementById('id13').style.display ='none';
				        document.getElementById('id14').style.display ='none';
				        document.getElementById('id15').style.display ='none';
				        document.getElementById('mot_pendinte2').style.display ='none';
				        document.getElementById('casos_agendamiento').style.display ='none';
				        document.getElementById('casos_agendamiento2').style.display ='none';
				        document.getElementById('obli_1').style.display ='none';
				        document.getElementById('obli_2').style.display ='inherit';
				        document.getElementById("timepicker").value="";
				        document.getElementById("datepicker").value="";
				        document.getElementById("no_desea").value="";
				        document.getElementById("no_aplica").value="";
				        pro_reiniciar();
				    }
				    
				}
				
				function pro_estado2(){
				    if(document.getElementById("mot_pendinte2").value=="VOLVER A LLAMAR" || document.getElementById("mot_pendinte2").value=="CONTESTA TERCERA PERSONA" || document.getElementById("mot_pendinte2").value=="ACUERDO DE PAGO"){
				        document.getElementById('casos_agendamiento').style.display ='inherit';
				        document.getElementById('casos_agendamiento2').style.display ='inherit';
				        document.getElementById("timepicker").value="";
				        document.getElementById("datepicker").value="";
				        document.getElementById("no_desea").value="";
				        document.getElementById("no_aplica").value="";
				        pro_reiniciar();
				    }else{
				        document.getElementById('id13').style.display ='none';
				        document.getElementById('id14').style.display ='none';
				        document.getElementById('casos_agendamiento').style.display ='none';
				        document.getElementById('casos_agendamiento2').style.display ='none';
				        document.getElementById("timepicker").value="";
				        document.getElementById("datepicker").value="";
				        document.getElementById("no_desea").value="";
				        document.getElementById("no_aplica").value="";
				        pro_reiniciar();
				    }
				}
				
				document.oncontextmenu = function(){return false}
				

				function addnext(){
				     var dataString = 'a1=1';
				     document.getElementById('next').disabled = true;
                     $('#MsjError').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="25" height="25"/>Consultado Base de Datos...</p>').fadeIn(500);
			         $.ajax({
    					type: 'POST',
    					url: '3_fidelizacion_HBO/php/find_new.php', 
    					data:  dataString, 
    					success: function(x){

    					    if(x=='ntx_001_R'){
                                $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Sin Registros!</strong> Se alcanzó el limite de nuevos registros.<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
    					        document.getElementById('next').disabled = true;

    					    }else{
    					        var separa = x.split("$");
        					    document.getElementById('cedula').value = separa[0];
                                document.getElementById('nombre').value = separa[1];
                                document.getElementById('contrato').value = separa[2];
                                document.getElementById('telf1').value = separa[3];
                                document.getElementById('telf2').value = separa[4];
                                document.getElementById('telf3').value = separa[5];
                                document.getElementById('mora').value = separa[6];
                                document.getElementById('valor').value = separa[8];
                                document.getElementById('radar').value = separa[9];
                                document.getElementById('Telefono').value = separa[10];
                                document.getElementById('observacion').value = separa[11];
                                document.getElementById('MsjError').style.display ='none';
                                document.getElementById('observacion').disabled =false;
                                document.getElementById('rol').disabled =false;
                                document.getElementById('save').disabled =false;
    					    }
    					}
    				 });
			    
			     }//addnext
			     
			     function addcase(){
			         var band = 0;
			         //se hacen las validaciones segun el caso.
			         if(document.getElementById("rol").value==""){
			             $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Seleccione Estado de la cobranza (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			             document.getElementById('id7').className = "form-group has-error";
			             $('#id7-7').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione una opción</span>').fadeIn(500);
			             band = 0;
			         }else if(document.getElementById("rol").value=="PENDIENTE"){
			             if(document.getElementById("mot_pendinte2").value==""){
			                $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Seleccione motivo de caso pendiente (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			                document.getElementById('id15').className = "form-group has-error";
			                $('#id15-15').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione una opción</span>').fadeIn(500);
			                band = 0;
			             }else if(document.getElementById("mot_pendinte2").value=="VOLVER A LLAMAR" || document.getElementById("mot_pendinte2").value=="CONTESTA TERCERA PERSONA" || document.getElementById("mot_pendinte2").value=="ACUERDO DE PAGO"){
			                     if(document.getElementById("datepicker").value==""){
                                    $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos de Agendamiento (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
        			                document.getElementById('id11').className = "form-group has-error";
        			                $('#id11-11').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione Fecha</span>').fadeIn(500);
                                    band = 0;
                                 }else{
                                     pro_reiniciar();
                                     band = 1;
                                     //alert(document.getElementById("datepicker").value.getDay());
                                 }
                                 if(document.getElementById("timepicker").value==""){
                                    $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos de Agendamiento (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
        			                document.getElementById('id12').className = "form-group has-error";
        			                $('#id12-12').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione Hora</span>').fadeIn(500);
                                     band = 0;
                                 }else{
                                     band = 1;
                                 }
			             }else{
			                 band = 1;
			             }
			         }else if(document.getElementById("rol").value=="NO EXITOSO"){
			             if(document.getElementById("no_desea").value==""){
			                $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos de No Exitoso (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			                document.getElementById('id13').className = "form-group has-error";
			                $('#id13-13').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione motivo</span>').fadeIn(500);
                            band = 0;
			             }else{
			                 pro_reiniciar();
                             band = 1;
			             }
			 
			         }else if(document.getElementById("rol").value=="NO APLICA"){
			             if(document.getElementById("no_aplica").value==""){
			                $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos de No aplica (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			                document.getElementById('id14').className = "form-group has-error";
			                $('#id14-14').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione motivo</span>').fadeIn(500);
                            band = 0;
			             }else{
			                 pro_reiniciar();
                             band = 1;
			             }
			 
			         }else if(document.getElementById("rol").value=="EXITOSO" || document.getElementById("rol").value=="EXITOSO CONVENIO"){
			             band = 1;
			         }
			         
			         if(band == 1){

			             if (confirm("\xbfGuardar registro?")){
			                 document.getElementById('save').disabled = true;
			                 var rol = "";
			                 //converto a numero la opcion elegida
                             if(document.getElementById("rol").value == "EXITOSO" || document.getElementById("rol").value=="EXITOSO CONVENIO"){
                                rol = 1;
                             }else if(document.getElementById("rol").value == "NO APLICA"){
                                rol = 2;
                             }else if(document.getElementById("rol").value == "NO EXITOSO"){
                                rol = 3;
                             }else if(document.getElementById("rol").value == "PENDIENTE"){
                                if(document.getElementById("mot_pendinte2").value == "DATA MINING" || document.getElementById("mot_pendinte2").value == "IMPUGNACION" || document.getElementById("mot_pendinte2").value == "VENTA DE AUTO" || document.getElementById("mot_pendinte2").value == "BUZON DE MENSAJE"){
                                    rol = 4;
                                }else if(document.getElementById("mot_pendinte2").value == "VOLVER A LLAMAR" || document.getElementById("mot_pendinte2").value == "CONTESTA TERCERA PERSONA" || document.getElementById("mot_pendinte2").value == "ACUERDO DE PAGO"){
                                    rol = 5;
                                }
                             }

			                 $('#MsjError').hide().html('').fadeIn(500);
    			             var dataString = 'a1=' + rol + '&a2=' + document.getElementById("rol").value + '&a3=' + document.getElementById("datepicker").value + '&a4=' + document.getElementById("timepicker").value + '&a5=' + document.getElementById("no_desea").value  + '&a6=' + document.getElementById("observacion").value + '&a7=' + document.getElementById("no_aplica").value + '&a8=' + document.getElementById("mot_pendinte2").value;
    				         document.getElementById('save').disabled = true;
                             $('#MsjError').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="25" height="25"/>Guardando datos...</p>').fadeIn(500);

    			             $.ajax({
        					     type: 'POST',
        					     url: '3_fidelizacion_HBO/php/guardar_hbo.php', 
        					     data:  dataString, 
        					     success: function(x){
        					         $('#MsjError').hide().html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Guardado!</strong> Gestión de cobranza guardada.<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
        					         document.getElementById('next').disabled = false;
        					         document.getElementById('observacion').value = "";
        					         document.getElementById('nombre').value = "";
        					         document.getElementById('cedula').value = "";
        					         document.getElementById('contrato').value = "";
        					         document.getElementById('telf1').value = "";
        					         document.getElementById('telf2').value = "";
        					         document.getElementById('telf3').value = "";
        					         document.getElementById("datepicker").value = "";
        					         document.getElementById("timepicker").value = "";
        					         document.getElementById("no_desea").value = "";
        					         document.getElementById("no_aplica").value="";
        					         document.getElementById("mot_pendinte2").value="";
        					         document.getElementById('rol').value = "";
        					         document.getElementById('id13').value = "";
        					         document.getElementById('id14').value = "";
        					         document.getElementById('valor').value = "";
        					         document.getElementById('Telefono').value = "";
        					         document.getElementById('mora').value = "";
        					         document.getElementById('radar').value = "";
        					         document.getElementById('id13').style.display ='none';
        					         document.getElementById('id14').style.display ='none';
        					         document.getElementById('id15').style.display ='none';
            				         document.getElementById('casos_agendamiento').style.display ='none';
            				         document.getElementById('casos_agendamiento2').style.display ='none';
            				         document.getElementById('obli_1').style.display ='none';
            				         document.getElementById('obli_2').style.display ='inherit';
            				         document.getElementById('rol').disabled = true;
            				         document.getElementById('observacion').disabled = true;
            				         $('#MsjError').fadeOut(10500);
            				         pro_refreshHBO();
            				         pro_charge2();
            				         pro_charge3();
            				         pro_charge4();
        					     }
        				      });
			             }//if pregunta guardar 
    			    }//if de la bandera band==1?
			     }//addcase
			     

				$('#loader2').fadeOut(1500);
				camp1.focus();
				pro_refreshHBO();
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