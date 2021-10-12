<?php
  session_start();
  date_default_timezone_set("America/Guayaquil"); 
  include '../../../../php/conexion_bd.php';
  
   $a1 = $_POST['aa2']; //nombre
   $a2 = $_POST['aa1']; //cedula
   $a3 = $_POST['aa3']; //codigo
   $a4 = $_POST['aa4']; //citacion
   
   	$block = mysqli_query($enlace, "SELECT cedula, motivo_tip2, placa, fecha_citacion, hora_citacion, radar, valor, TIMESTAMPDIFF(DAY,`fecha_citacion`,NOW()) as dias_mora, telf, observacion, nm_citacion, asignado_fecha, cod_vendedor, u.usuario,estado_venta, u.usuario as user FROM HBOFidelizacion e INNER JOIN usuarios u ON u.id=e.cod_vendedor WHERE  e.codigo_bd = '$a3' LIMIT 1");
    mysqli_data_seek ($block, 0);
    while($ver=mysqli_fetch_array($block)){
        
        $res1 = $ver['6'];
        $res2 = $ver['2'];
        $res9 = $ver['9'];
        $res10 = $ver['10'];
        $res11 = $ver['11'];
        $res13 = $ver['user'];
        $res14 = ucfirst($ver['14']); 
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
					Modificando Caso: <b id="etiquetaB" value="<?php echo $a3 ?>"><?php echo $a3 ?></b>
				  </h1>
				  <ol class="breadcrumb">
					<li><a href="menu3.php"><i class="fa fa-dashboard"></i> Principal</a></li>
					<li class="active">Gestión modificar multa</li>
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
                                                
										        <div id="id45" class="form-group">
													<label>*Placa:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-file-text-o"></i>
													  </div>
													  <input type="text" class="form-control" id="n_placa" data-mask tabindex="1" value="<?php echo $res2 ?>">
													</div>
													<div id="id45-45"></div>
												</div>
											    
										        <div id="id6" class="form-group">
													<label>*Nº Citación:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-file-text-o"></i>
													  </div>
													  <input type="text" class="form-control" id="n_cita" data-mask tabindex="4" value="<?php echo $res10 ?>">
													</div>
													<div id="id6-6"></div>
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
                                                              <input type="text" class="form-control pull-right"  id="datepicker">
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
											    
										        <div id="id46" class="form-group">
													<label>*Multa:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-file-text-o"></i>
													  </div>
													  <input type="text" class="form-control" id="n_multa" data-mask tabindex="2" value="<?php echo $res1 ?>">
													</div>
													<div id="id46-46"></div>
												</div>
												
												<div id="id41" class="form-group">
													<label>*Fecha de Asignación:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-calendar-check-o "></i>
													  </div>
													  <input type="text" class="form-control" id="datepicker2" data-mask tabindex="5" value="<?php date_default_timezone_set("America/Guayaquil"); echo date("Y/m/d"); ?>">
													</div>
													<div id="id41-41"></div>
												</div>

												<div id="id7" class="form-group">
													<label>*Estado de la transacción:</label>
													<select id="rol" onchange="pro_estado();" class="form-control select2" style="width: 100%;" data-mask tabindex="12">
                                                        <option value="" selected="selected">Seleccione..</option>
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
														<button type="button" id="guardarHBO2" onClick="guardar801();" class="btn btn-info pull-right">Modificar</button>
													</td>
													<td width="2%">	
													</td>
													<td width="49%">
													    <button type="button" id="cancelHBO" onClick="cancel82();" class="btn btn-info pull-left">Cancelar</button>
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
				
				function cancel82(){
                    if (confirm("\xbfCancelar y regresar?")){
                       	$("#content1").load('0_SUPERVISORES/transvial_registros/modificar_multas/modificar_multas/des_motivos2.php');
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
                
                //Date picker
                $('#datepicker2').datepicker({
                  autoclose: true
                })
                
                //Date picker
                $('#datepicker3').datepicker({
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
				
			     function guardar801(){
			         var band = 0;
			         var multa_cadena= document.getElementById("n_multa").value;
                     var fstChar = multa_cadena.charAt(0);

			         //se hacen las validaciones segun el caso.
			         if(document.getElementById("n_cita").value==""){
			             $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			             document.getElementById('id6').className = "form-group has-error";
			             $('#id6-6').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
			             band = 0;
			         }else if(fstChar!="$"){
			             $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			             document.getElementById('id46').className = "form-group has-error";
			             $('#id46-46').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Primer caracter debe ser $</span>').fadeIn(500);
			             band = 0;
			         }else if(document.getElementById("datepicker2").value==""){
			             $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			             document.getElementById('id41').className = "form-group has-error";
			             $('#id41-41').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
			             band = 0;
			         }else if(document.getElementById("n_multa").value==""){
			             $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			             document.getElementById('id46').className = "form-group has-error";
			             $('#id46-46').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
			             band = 0;
			         }else if(document.getElementById("n_placa").value==""){
			             $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Complete todos los campos (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
			             document.getElementById('id45').className = "form-group has-error";
			             $('#id45-45').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
			             band = 0;
			         }else if(document.getElementById("rol").value==""){
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
			             if (confirm("\xbfModificar registro?")){
			                 document.getElementById('guardarHBO2').disabled = true;
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
    			             var dataString = 'a1=' + rol + '&a2=' + document.getElementById("rol").value + '&a3=' + document.getElementById("datepicker").value + '&a4=' + document.getElementById("timepicker").value + '&a5=' + document.getElementById("no_desea").value  + '&a6=' + document.getElementById("observacion").value + '&a7=' + document.getElementById("no_aplica").value + '&a8=' + document.getElementById("mot_pendinte2").value + '&a9=' + contenido + '&a10=' + document.getElementById("n_cita").value + '&a11=' + document.getElementById("datepicker2").value + '&a32=' + document.getElementById("n_multa").value + '&a42=' + document.getElementById("n_placa").value;
    				         document.getElementById('guardarHBO2').disabled = true;
                             $('#MsjError').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="25" height="25"/>Modificando registro...</p>').fadeIn(500);
    			             //alert(dataString);
    			             $.ajax({
        					     type: 'POST',
        					     url: '0_SUPERVISORES/transvial_registros/modificar_multas/modificar_multas/modificar_sup.php', 
        					     data:  dataString, 
        					     success: function(x){
        					         $('#MsjError').hide().html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Guardado!</strong> Redireccionando..<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
        					         alert("Modificado con éxito");
        					         document.getElementById('cancelHBO').disabled = true;
        					         document.getElementById('guardarHBO2').disabled = true;
            				         setTimeout($("#content1").load('0_SUPERVISORES/transvial_registros/modificar_multas/modificar_multas/des_motivos2.php'),10000);
        					     }
        				      });
			             }//if pregunta guardar 
    			    }//if de la bandera band==1?
			     }//guardar12
			     

				$('#loader2').fadeOut(1500);
				camp1.focus();
				pro_estado();
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