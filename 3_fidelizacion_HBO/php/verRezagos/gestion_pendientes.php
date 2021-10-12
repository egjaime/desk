<?php
  session_start();
  date_default_timezone_set("America/Guayaquil"); 
  include '../../../php/conexion_bd.php';
  
   $a1 = $_POST['aa2']; //nombre
   $a2 = $_POST['aa1']; //cedula
   $a3 = $_POST['aa3']; //codigo
   
   	$block = mysqli_query($enlace, "SELECT cedula, nombre, placa, fecha_citacion, hora_citacion, radar, valor, TIMESTAMPDIFF(DAY,`fecha_citacion`,NOW()) as dias_mora, telf, observacion, nm_citacion FROM HBOFidelizacion WHERE  codigo_bd = '$a3' and `cod_vendedor`='{$_SESSION['id']}' LIMIT 1");
    mysqli_data_seek ($block, 0);
    while($ver=mysqli_fetch_array($block)){
        $res0 = $ver['0'];
        $res1 = $ver['1'];
        $res2 = $ver['2'];
        $res3 = $ver['3'];
        $res4 = $ver['4'];
        $res5 = $ver['5'];
        $res6 = $ver['6'];
        $res7 = $ver['7'];
        $res8 = $ver['8'];
        $res9 = $ver['9'];
        $res10 = $ver['10'];
        
    }
  
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
					Identificador Caso Agendado: <b id="etiquetaB" value="<?php echo $a3 ?>"><?php echo $a3 ?></b>
				  </h1>
				  <ol class="breadcrumb">
					<li><a href="menu3.php"><i class="fa fa-dashboard"></i> Principal</a></li>
					<li class="active">Gestión Agendados Tranvial</li>
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
													  <input type="text" class="form-control" id="cedula" data-mask tabindex="1" readonly="readonly" value="<?php echo $res0 ?>">
													</div>
													<div id="id1-1"></div>
												</div>
												
												<div id="id3" class="form-group">
													<label>Placa:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-automobile (alias)"></i>
													  </div>
													  <input type="text" class="form-control" id="contrato" data-mask tabindex="3" readonly="readonly" value="<?php echo $res2 ?>">
													</div>
													<div id="id3-3"></div>
												</div>
												
												<div id="id4" class="form-group">
													<label>Fecha de Citación:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-calendar-check-o "></i>
													  </div>
													  <input type="text" class="form-control" id="telf2" data-mask tabindex="5" readonly="readonly" value="<?php echo $res3 ?>">
													</div>
													<div id="id4-4"></div>
												</div>
												
												<div id="id10" class="form-group">
													<label>Radar:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-video-camera"></i>
													  </div>
													  <input type="text" class="form-control" id="radar" data-mask tabindex="7" readonly="readonly" value="<?php echo $res5 ?>">
													</div>
													<div id="id10-10"></div>
												</div>
												
												<div id="id22" class="form-group">
													<label>Días en Mora:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-server"></i>
													  </div>
													  <input type="text" class="form-control" id="mora" data-mask tabindex="9" readonly="readonly" value="<?php echo $res7 ?>">
													</div>
													<div id="id22-22"></div>
												</div>
												

												<div id="id8" class="form-group">
													 <label>Observación:</label>
													 <textarea class="form-control" rows="4" id="observacion" placeholder="..." style="resize: none; " data-mask tabindex="11" maxlength="1000"><?php echo $res9 ?></textarea>
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
													  <input type="text" class="form-control" id="nombre" data-mask tabindex="2" readonly="readonly" value="<?php echo $res1 ?>">
													</div>
													<div id="id5-5"></div>
												</div>
										
										        <div id="id6" class="form-group">
													<label>Nº Citación:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-file-text-o"></i>
													  </div>
													  <input type="text" class="form-control" id="telf1" data-mask tabindex="4" readonly="readonly" value="<?php echo $res10 ?>">
													</div>
													<div id="id6-6"></div>
												</div>
												
												<div id="id9" class="form-group">
													<label>Hora Citación:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-clock-o"></i>
													  </div>
													  <input type="text" class="form-control" id="telf3" data-mask tabindex="6" readonly="readonly" value="<?php echo $res4 ?>">
													</div>
													<div id="id9-9"></div>
												</div>
												
												<div id="id20" class="form-group">
													<label>Valor Deuda:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-dollar (alias)"></i>
													  </div>
													  <input type="text" class="form-control" id="valor" data-mask tabindex="8" readonly="readonly" value="<?php echo $res6 ?>">
													</div>
													<div id="id20-20"></div>
												</div>
												
												<div id="id21" class="form-group">
													<label>Teléfono Contacto:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-phone"></i>
													  </div>
													  <input type="text" class="form-control" id="Telefono" data-mask tabindex="10" readonly="readonly" value="<?php echo $res8 ?>">
													</div>
													<div id="id21-21"></div>
												</div>
											
												<div id="id7" class="form-group">
													<label>*Estado de la transacción:</label>
													<select id="rol" onchange="pro_estado();" class="form-control select2" style="width: 100%;" data-mask tabindex="12">
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
	                                                <td width="41%">
														<button type="button" id="guardarHBO" onClick="guardar80();" class="btn btn-info pull-right">Guardar</button>
													</td>
													<td width="1%">	
													</td>
													<td width="16%">
													    <button type="button" id="cancelHBO" onClick="cancel82();" class="btn btn-info pull-center">Cancelar</button>
													 </td>
													 <td width="1%">	
													</td>
													<td width="41%">
													      
													    <button type="button" id="cargar_multa" data-toggle="modal" data-target="#myModalExito" data-placa="<?php echo $res2?>" class="btn btn-danger pull-left">Añadir Multa</button>
													 </td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
							
												
					</section>

				</form>
                
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
				  
                 
				<script src="assets/plugins/input-mask/jquery.inputmask.js"></script>
				<script src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
		    	<script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
		    	<!-- bootstrap datepicker -->
	            <script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
		    	

				<script>
				
				//aqui inicia nuevo
				
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
    			             var dataStringA = 'a1=' + document.getElementById("anadir_boleta").value + '&a2=' + document.getElementById("anadir_valor").value + '&a3=' + document.getElementById("datemask").value + '&a4=' + document.getElementById("anadir_hora").value + '&a5=' + document.getElementById("anadir_obs").value  + '&a6=' + document.getElementById("anadir_radar").value + '&a7=' + "<?php echo $a3; ?>" + '&a8=' + "<?php echo $a1; ?>" + '&a9=' + "<?php echo $a2; ?>" + '&a10=' + "<?php echo $res2; ?>" + '&a11=' + "<?php echo $res8; ?>";
                             $('#MsjError2').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="25" height="25"/>Añadiendo multa...</p>').fadeIn(500);
    			             $.ajax({
        					     type: 'POST',
        					     url: '3_fidelizacion_HBO/php/verRezagos/anadir_multa_new.php', 
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
				
				function cancel82(){
                    if (confirm("\xbfCancelar y regresar?")){
                       	$("#content1").load('3_fidelizacion_HBO/php/verPendientes/mis_pendientes.php');
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
				
			     function guardar80(){
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
			                 document.getElementById('guardarHBO').disabled = true;
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
                                }else if(document.getElementById("mot_pendinte2").value == "VOLVER A LLAMAR" || document.getElementById("mot_pendinte2").value == "CONTESTA TERCERA PERSONA" || document.getElementById("mot_pendinte2").value=="ACUERDO DE PAGO"){
                                    rol = 5;
                                }
                             }
                                 
			                 
			                 $('#MsjError').hide().html('').fadeIn(500);
    			             var dataString = 'a1=' + rol + '&a2=' + document.getElementById("rol").value + '&a3=' + document.getElementById("datepicker").value + '&a4=' + document.getElementById("timepicker").value + '&a5=' + document.getElementById("no_desea").value  + '&a6=' + document.getElementById("observacion").value + '&a7=' + document.getElementById("no_aplica").value + '&a8=' + document.getElementById("mot_pendinte2").value + '&a9=' + contenido;
    				         document.getElementById('guardarHBO').disabled = true;
                             $('#MsjError').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="25" height="25"/>Guardando datos...</p>').fadeIn(500);
    			             //alert(dataString);
    			             $.ajax({
        					     type: 'POST',
        					     url: '3_fidelizacion_HBO/php/verPendientes/guardar_pendiente.php', 
        					     data:  dataString, 
        					     success: function(x){
        					         $('#MsjError').hide().html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Guardado!</strong> Redireccionando..<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
        					         document.getElementById('cancelHBO').disabled = true;
        					         document.getElementById('guardarHBO').disabled = true;
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
            				         setTimeout($("#content1").load('3_fidelizacion_HBO/php/verPendientes/mis_pendientes.php'),10000);
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