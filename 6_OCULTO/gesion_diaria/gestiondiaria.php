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

            

			</head>
			<body class="hold-transition skin-blue sidebar-mini">

				<div class="loader2" id="loader2"></div>

				<section class="content-header">
				  <h1>
					Gestión diaria DTH Oculto
				  </h1>
				  <ol class="breadcrumb">
					<li><a href="menu4.php"><i class="fa fa-dashboard"></i> Principal</a></li>
					<li class="active">Gestión diaria DTH Oculto</li>
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
													<label>*Nombre del cliente:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-user"></i>
													  </div>
													  <input type="text" class="form-control" id="name" data-mask tabindex="1" onKeyPress="return soloLetras(event)" maxlength="50">
													</div>
													<div id="id1-1"></div>
												</div>
												
											
    												<div id="id3" class="form-group">
    													<label>*Número de servicio:</label>
    													<div class="input-group">
    													  <div class="input-group-addon">
    													<i class="fa fa-pencil-square-o"></i>
    													  </div>
    													  <input type="text" class="form-control" id="ns" data-mask tabindex="3" onKeyPress="return soloNumeros(event)" maxlength="15">
    													</div>
    													<div id="id3-3"></div>
    												</div>
											
											
												<div id="id5" class="form-group">
													<label>*Gestión Exitosa:</label>
													<select id="estado_ges" class="form-control select2" style="width: 100%;" data-mask tabindex="5">
													<option selected="selected" value="" disabled>Seleccione..</option>
													  <option value="SI">Si</option>
													  <option value="NO">No</option>
													</select>
													<div id="id5-5"></div>
												</div>

												
											<div id="o_id1">	
												<div class="form-group">
                                                  <p class="help-block">* Campos Obligatorios.</p>
                                                </div>
                                            </div>
									</div>
											
											
											
											<!-- /.columna derecha -->
											<div class="col-md-6">
											    
											    
    												<div id="id2" class="form-group">
    													<label>*Cédula del cliente:</label>
    													<div class="input-group">
    													  <div class="input-group-addon">
    													<i class="fa fa-credit-card"></i>
    													  </div>
    													  <input type="text" class="form-control" id="cedula" data-mask tabindex="2" onKeyPress="return soloNumeros(event)" maxlength="15">
    													</div>
    													<div id="id2-2"></div>
    												</div>
										
												<div id="id4" class="form-group">
													<label>*Tipificación:</label>
													<select id="estado_tip" class="form-control select2" style="width: 100%;" data-mask tabindex="4">
													<option selected="selected" value="" disabled>Seleccione..</option>
													  <option value="REFRESH">Refresh</option>
													  <option value="ACTIVACION">Activación</option>
													  <option value="CAMBIO DE DECO POR DAÑO">Cambio de Deco por daño</option>
													  <option value="ACTIVACION DE DECO ADICIONAL PRIMER DECO">Activación de deco adicional 1er deco</option>
													  <option value="ACTIVACION DE DECO ADICIONAL SEGUNDO DECO">Activación de deco adicional 2do deco</option>
													  <option value="ACTIVACION DE DECO ADICIONAL TERCER DECO">Activación de deco adicional 3er deco</option>
													  <option value="CAMBIO DE DISCO DURO">Cambio de disco duro</option>
													  <option value="MIGRACION DE TECNOLOGIA">Migración de tecnología</option>
													  <option value="CAMBIO DE LNB">Cambio de LNB</option>
													  <option value="TRASLADO EXTERNO">Traslado externo</option>
													  <option value="TRASLADO INTERNO">Traslado Interno</option>
													  <option value="SOLICITA DATOS DEL CLIENTE PRA ACTIVACION">Solicita datos del cliente para activación</option>
													  <option value="LLAMADA COLGADA">Llamada colgada</option>
													  <option value="ERROR AL GENERAR COMANDOS EN ATCDTH">Error al generar comandos en ATCDTH</option>

													</select>
													<div id="id4-4"></div>
												</div>
											


												<div id="id6" class="form-group">
													 <label>Observación:</label>
													 <textarea class="form-control" rows="2" id="obs" placeholder="..." style="resize: none; " data-mask tabindex="6" maxlength="500"></textarea>
												     <div id="id6-6"></div>
												</div>
												
											<div id="o_id2" style="display: none">	
												<div class="form-group">
                                                  <p class="help-block">* Campos Obligatorios.</p>
                                                </div>
                                            </div>
												
											
											</div>
											
											<div class="row">
												<div class="col-md-12">
													<div class="col-md-12">
														<div class="box-tools" id="Msj_Error" align="center">
															<!–mensaje de error–> 
														</div>
													</div>
												</div>
											</div>
											
											<table class="table text-center">
											    
												<tr>
												    <div class="checkbox">

                                                    
                                                    </div>
													<td width="49%">
														<button type="button" id="cancel" data-mask tabindex="15" onClick="clean2();" class="btn btn-info pull-right">Cancelar</button>
													</td>
													<td width="2%">	
													</td>
													<td width="49%">
														<button type="button" data-mask tabindex="14" id="save" onClick="addcase();" class="btn btn-info pull-left" >Guardar</button>
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
                                                    
													<select id="refresh"  onchange="pro_refresh();" class="form-control select2" style="width: 100%;">
												      <option selected="selected" value="0">Hoy</option>
													  <option value="1">Ayer</option>
													  <option value="2">Mes Actual</option>
													  <option value="3">Mes Anterior</option>
													  
     												</select>
                                                    
													</div>
													&nbsp;&nbsp;&nbsp;
											
													<a href="#" id="iconact"><i id="refresh10" style="display:none" class="fa fa-refresh fa-spin"></i><i id="refresh11" class="fa fa-refresh" onClick="pro_refresh();"  style="padding-top: 10px; padding-left: 5px;" title="Actualizar"></i></a>
												</div>
											</form>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                      <div class="row">
                                        <div class="col-md-12">
                                            
                                            <ul class="nav nav-pills nav-stacked">
                                              <li><a href="#">Reportes
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
                                              <td>Exitosos</td>
                                              <td><span id="scerrado" style="padding: 22px;"><i class="fa fa-refresh fa-spin"></i></span></td>
                                              <td></td>
                                              <td><span id="scerradoP" class="badge bg-green">-</span></td>
                                           
                                            </tr>
                                            </ul>
                                            
                                            <tr>
                                              <td></td>
                                              <td>No Exitosos</td>
                                              <td><span id="sinteraccion" style="padding: 22px;"><i class="fa fa-refresh fa-spin"></i></span></td>
                                              <td></td>
                                              <td><span id="sinteraccionP" class="badge bg-light-blue">-</span></td>

                                            </tr>


                                            <tr>
                                              <td></td>
                                              <td></td>
                                              <td><a href="#" onClick="pro_carga();" id="ver_des" data-toggle="modal" data-target="#modal-defaultG" title="Ver / Descargar" style="display: none"></a></td>
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
                  
                 
                <div class="modal fade" id="modal-defaultG">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div id="cargaG">
                                
                            </div>
                        </div>
                    </div>
                </div>


				<script src="assets/plugins/input-mask/jquery.inputmask.js"></script>
				<script src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
		    	<script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
		    	

				<script>
				

				  //function pro_carga(){
				    //$("#example2").remove();
					//$("#cargaG").load('4_COLEGA/php/user/gestiondiaria/val_table.php?a1='+campR.value); 
				  //}
				
				
				document.oncontextmenu = function(){return false}
				
				var camp1 = document.getElementById("name");
			    var camp2 = document.getElementById("cedula");
			    var camp3 = document.getElementById("ns");
			    var camp4 = document.getElementById("estado_tip");
			    var camp5 = document.getElementById("estado_ges");
			    var camp6 = document.getElementById("obs");


			    var campR = document.getElementById("refresh");
			    
			    var cancel = document.getElementById("cancel");
			    var save = document.getElementById("save");
			    
			    var c1 = document.getElementById("id1");
			    var c2 = document.getElementById("id2");
			    var c3 = document.getElementById("id3");
			    var c4 = document.getElementById("id4");
			    var c5 = document.getElementById("id5");
			    var c6 = document.getElementById("id6");


			    function pro_refresh(){
			        document.getElementById('refresh10').style.display = '';
	                document.getElementById('refresh11').style.display = 'none';
	                $('#stotal').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
			        $('#scerrado').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
			        $('#sinteraccion').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);


			        var dataString = 'a1=' + campR.value;

			        $.ajax({
						type: 'POST',
						url: '6_OCULTO/php/gestiondiaria/val_refresh.php', 
						data:  dataString, 
						success: function(x){
					         if(x.split('_')[0] != 0){
    						       document.getElementById("stotal").innerHTML = x.split('_')[0];
                             }else{
                                document.getElementById("stotal").innerHTML = "0";
                            }

                            document.getElementById("scerrado").innerHTML = x.split('_')[1];
							
								if(x.split('_')[1] != 0){
						            var sntT = x.split('_')[1] * 100 / x.split('_')[0];
						            sntT = sntT.toFixed(1);
						            document.getElementById("scerradoP").innerHTML = sntT + "%";
						        }else{
						            if (x.split('_')[1] == 0){
						               document.getElementById("scerradoP").innerHTML = "-";
						            }else{
						               document.getElementById("scerradoP").innerHTML = "0.0%";
						            }
						        }
						        

							document.getElementById("sinteraccion").innerHTML = x.split('_')[2];
							
								if(x.split('_')[2] != 0){
						            var sntT = x.split('_')[2] * 100 / x.split('_')[0];
						            sntT = sntT.toFixed(1);
						            document.getElementById("sinteraccionP").innerHTML = sntT + "%";
						        }else{
						            if (x.split('_')[2] == 0){
						               document.getElementById("sinteraccionP").innerHTML = "-";
						            }else{
						               document.getElementById("sinteraccionP").innerHTML = "0.0%";
						            }
						        }	
						        
						}
					});
					
					document.getElementById('refresh10').style.display = 'none';
	                document.getElementById('refresh11').style.display = '';
			        
			    }

                //aqui termina SA
                
				  $(function () {
					//Initialize Select2 Elements
					//$('.select2').select2()

					//Datemask dd/mm/yyyy
					$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/aaaa' })
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
				  

					function soloNumeros(e){
						var key = window.Event ? e.which : e.keyCode
						return ((key >= 48 && key <= 57) || (key==8)) 
     				}
     				
					function soloLetras(e){
					   key = e.keyCode || e.which;
					   tecla1 = String.fromCharCode(key).toLowerCase();
					   tecla = (document.all) ? e.keyCode : e.which;
					   letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";

						if(letras.indexOf(tecla1)==-1 && !tecla_especial){
							return false;
						}
					}
					
					function soloLetras2(e){
					   key = e.keyCode || e.which;
					   tecla1 = String.fromCharCode(key).toLowerCase();
					   tecla = (document.all) ? e.keyCode : e.which;
					   letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
		
								//Espacios
						if (tecla==32) return false; 

						if(letras.indexOf(tecla1)==-1 && !tecla_especial){
							return false;
						}
					}
					
					function clean(){
					   
    					   c1.className = "form-group has-feedback";
    					   $('#id1-1').hide().html('').fadeIn(500);
    					   
    					   c2.className = "form-group has-feedback";
    					   $('#id2-2').hide().html('').fadeIn(500);
    					   
    					   c3.className = "form-group has-feedback";
    					   $('#id3-3').hide().html('').fadeIn(500);
    					   
    					   c4.className = "form-group has-feedback";
    					   $('#id4-4').hide().html('').fadeIn(500);
    						
    					   c5.className = "form-group has-feedback";
    					   $('#id5-5').hide().html('').fadeIn(500);
    					   
    					   c6.className = "form-group has-feedback";
    					   $('#id6-6').hide().html('').fadeIn(500);
    					   
    					   camp1.value = "";
    					   camp2.value = "";
    					   camp3.value = "";
    					   camp4.value = "";
    					   camp5.value = "";
    					   camp6.value = "";
					       camp1.focus();

					}
					
					function clean2(){
					    if (confirm("\xbfReiniciar todos los campos?")){
					        clean();
					    }
					}

                //aqui comienzo SA
                function pro_name(){
					if(camp1.value === ""){
					   c1.className = "form-group has-error";
					   $('#id1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
					   a = 1;
					}else{
					   c1.className = "form-group has-feedback";
					   $('#id1-1').hide().html('').fadeIn(500);
					   a = 0;
					}
				}

				function pro_ced(){
					if(camp2.value === ""){
					   c2.className = "form-group has-error";
					   $('#id2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
					   b = 1;
					}else if(camp2.value.length < 10){
				       c2.className = "form-group has-error";
				       $('#id2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Cédula / RUC incompleto</span>').fadeIn(500);
					   b = 1;
					}else{
					   c2.className = "form-group has-feedback";
					   $('#id2-2').hide().html('').fadeIn(500);
					   b = 0;
					}
				}

				function pro_ns(){
					if(camp3.value === ""){
					   c3.className = "form-group has-error";
					   $('#id3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
					   c = 1;
					}else{
					   c3.className = "form-group has-feedback";
					   $('#id3-3').hide().html('').fadeIn(500);
					   c = 0;
					}
				}
				
				function pro_tip(){
					if(camp4.value === ""){
					   c4.className = "form-group has-error";
					   $('#id4-4').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione una opción</span>').fadeIn(500);
					   d = 1;
					}else{
					   c4.className = "form-group has-feedback";
					   $('#id4-4').hide().html('').fadeIn(500);
					   d = 0;
					}
				}
				
				function pro_ges(){
					if(camp5.value === ""){
					   c5.className = "form-group has-error";
					   $('#id5-5').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione una opción</span>').fadeIn(500);
					   e = 1;
					}else{
					   c5.className = "form-group has-feedback";
					   $('#id5-5').hide().html('').fadeIn(500);
					   e = 0;
					}
				}



					

				function addcase(){
				    
                    pro_name();
                    pro_ced();
                    pro_ns();
                    pro_tip();
                    pro_ges();

                    if(a==0 && b==0 && c==0 && d==0 && e==0){
                        band=0;
                    }else{
                        band=1;
                    }
                    

                    if(band==0){
                        
                        if (confirm("\xbfContinuar y guardar?")){
                            cancel.disabled = true;
    						save.disabled = true;
    						var dataString = 'a1=' + camp1.value + '&a2=' + camp2.value + '&a3=' + camp3.value + '&a4=' + camp4.value + '&a5=' + camp5.value + '&a6=' + camp6.value;
                            $('#Msj_Error').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="25" height="25"/>Guardando...</p>').fadeIn(500);
    							$.ajax({
    								type: 'POST',
    								url: '6_OCULTO/php/gestiondiaria/val_addges.php', 
    								data:  dataString, 
    								success: function(x){
    									if(x.split('_')[0]==1){
    										$('#Msj_Error').hide().html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button> Gestión guardada. <strong>Registro Nº: ' + x.split('_')[1] + '</strong><a href="#" class="alert-link"></a></div>').fadeIn(500);
                    						cancel.disabled = false;
                    						save.disabled = false;
    						            	clean();
    									    pro_refresh();

    									    $('#Msj_Error').fadeOut(9000);
    									}
    									else if(x==2){
    									    cancel.disabled = false;
                    						save.disabled = false;
    										$('#Msj_Error').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> Complete todos los campos obligatorios (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
    									}
    									else if(x==7){
    									    alert("Sesión Caducada. Vuelve a iniciar sesión");
    									    self.location = "index.php";
    									}
    									else{
    									    cancel.disabled = false;
                    						save.disabled = false;
                					        $('#Msj_Error').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> Error inesperado. Contacte al Administrador.<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
    									    alert("Msg Error: " + x);
    									}
    								}
    							});
    						
                        }else{
    					    return 0;
    				    }

                    } // fin de validacion
			}//principal

				$('#loader2').fadeOut(1500);
				camp1.focus();
				pro_refresh();
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