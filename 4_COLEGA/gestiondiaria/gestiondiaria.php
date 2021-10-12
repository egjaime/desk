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
					Gestión diaria - COLEGA
				  </h1>
				  <ol class="breadcrumb">
					<li><a href="menu4.php"><i class="fa fa-dashboard"></i> Principal</a></li>
					<li class="active">Gestión diaria</li>
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
													<label>*Anillamador:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-phone"></i>
													  </div>
													  <input type="text" class="form-control" id="ani" data-mask tabindex="1" onBlur="pro_ani();" onKeyPress="return soloNumeros(event)" maxlength="9">
													</div>
													<div id="id1-1"></div>
												</div>
												
											
											    <div id="id2" class="form-group">
													<label>*Hora de Ingreso: <a href="#" id="iconact"><i id="refresh14" class="fa fa-refresh" onClick="reload();"  style="padding-left: 8px;" title="Hora actual"></i></a></label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-clock-o"></i>
													  </div>
													  <div id="reloj_recarga">
													    <input type="datetime" class="form-control" id="datehour" onBlur="pro_hora();" value="<?php echo date("H:i",time());?>" data-mask tabindex="3" >
													  </div>
													</div>
													<div id="id2-2"></div>
												</div>
											
											
												<div id="id3" class="form-group">
													<label>*Ticket Omnicanal:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-share-alt"></i>
													  </div>
													  <input type="text" class="form-control" id="omni" onBlur="pro_omni();" onKeyPress="return soloNumeros(event)" maxlength="8" data-mask tabindex="5" >
													</div>
													<div id="id3-3"></div>
												</div>	
												
												<div id="SA1" style="display: none">
												     <div id="sa1" class="form-group">
    													<label>*ID llamada:</label>
    													<div class="input-group">
    													  <div class="input-group-addon">
    													<i class="fa fa-phone"></i>
    													  </div>
    													  <input type="text" class="form-control" id="id_call" data-mask tabindex="7" onBlur="pro_sa1();" onKeyPress="return soloNumeros(event)" maxlength="10">
    													</div>
    													<div id="sa01-01"></div>
    												</div>
    												
    												<div id="sa2" class="form-group">
    													<label>*Usuario GENESIS:</label>
    													<div class="input-group">
    													  <div class="input-group-addon">
    													<i class="fa fa-user"></i>
    													  </div>
    													  <input type="text" class="form-control" id="userG" data-mask tabindex="9" onBlur="pro_sa2();" maxlength="15" value="<?php echo $res22[0]; ?>" onKeyPress="return soloLetras2(event)">
    													</div>
    													<div id="sa02-02"></div>
    												</div>
    												
    												
    												
												</div>
												
												<!-- eliminar -->
												<div id="VT1" style="display: none">
												    <div id="id01" class="form-group">
    													<label>*Usuario OPEN:</label>
    													<div class="input-group">
    													  <div class="input-group-addon">
    													<i class="fa fa-user"></i>
    													  </div>
    													  <input type="text" class="form-control"  id="user" data-mask tabindex="7" onBlur="pro_id1();" maxlength="15" value="<?php echo $res22[0]; ?>" onKeyPress="return soloLetras2(event)">
    													</div>
    													<div id="id01-01"></div>
    												</div>
    											    
    											    <div id="id02" class="form-group">
    													<label>*Ticket OPEN:</label>
    													<div class="input-group">
    													  <div class="input-group-addon">
    													<i class="fa fa-edit (alias)"></i>
    													  </div>
    													  <input type="text" class="form-control" value="12345" id="num_open" data-mask tabindex="9" onBlur="pro_id2();" onKeyPress="return soloNumeros(event)" maxlength="7">
    													</div>
    													<div id="id02-02"></div>
    												</div>
    												
    												<div id="id05" class="form-group">
    													<label>*Virtual:</label>
    													<div class="input-group">
    													  <div class="input-group-addon">
    													<i class="fa fa-th-list"></i>
    													  </div>
    													  <input type="text" class="form-control" value="123455" id="num_virtual" data-mask tabindex="11" onBlur="pro_id5();" onKeyPress="return soloNumeros(event)" maxlength="10">
    													</div>
    													<div id="id05-05"></div>
    												</div>
    												
												</div>
											    <!-- eliminar -->
											    

												
											<div id="o_id1">	
												<div class="form-group">
                                                  <p class="help-block">* Campos Obligatorios.</p>
                                                </div>
                                            </div>
									</div>
											
											
											
											<!-- /.columna derecha -->
											<div class="col-md-6">
											    
											    
											    <div id="id5" class="form-group">
													<label>*Fecha de llamada:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-calendar"></i>
													  </div>
													  <input type="text" class="form-control" id="datemask"  onBlur="pro_fecha();" value="<?php date_default_timezone_set("America/Guayaquil"); echo date("d/m/Y"); ?>" data-mask tabindex="2" >
													</div>
													<div id="id5-5"></div>
												</div>
										
											
											
												<div id="id6" class="form-group">
													<label>*TMO:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-headphones"></i>
													  </div>
													  <input type="text" class="form-control" id="tmo" onBlur="pro_tmo();" data-inputmask="'alias': 'mm:ss'" data-mask tabindex="4"  >
													</div>
													<div id="id6-6"></div>
												</div>
											
											
											
												<div id="id7" class="form-group">
													<label>*Estado del ticket:</label>
													<select id="rol" onchange="pro_estado();" class="form-control select2" style="width: 100%;" data-mask tabindex="6">
													<option selected="selected" value="" disabled>Seleccione..</option>
													  <option value="1">Resuelto</option>
													  <option value="2">Escalado</option>
													  <option value="5">Llamada Colgada</option>
													  
													</select>
													<div id="id7-7"></div>
												</div>
												
										
    												<div id="SA2" style="display: none">
												     <div id="sa3" class="form-group">
    													<label>*Hora de Cierre:</label>
    													<div class="input-group">
    													  <div class="input-group-addon">
    													<i class="fa fa-clock-o"></i>
    													  </div>
    													  <input type="datetime" class="form-control" id="datehour2" onBlur="pro_sa3();"  data-mask tabindex="8" >
    													</div>
    													<div id="sa03-03"></div>
    												</div>
    												
    												<div id="sa4" class="form-group">
    													<label>*Motivo de cierre:</label>
    													<select id="rol2" onchange="pro_sa4();" class="form-control select2" style="width: 100%;" data-mask tabindex="10">
    													<option selected="selected" value="" disabled>Seleccione..</option>
    													  <option value="Ingresa sin audio (+0:05seg)">Ingresa sin audio (+0:05seg)</option>
    													  <option value="Tecnico deja canal abierto en medio del soporte (+2:05min)">Tecnico deja canal abierto en medio del soporte (+2:05min)</option>
    													  <option value="Tecnico deja canal abierto despues de finalizar el soporte">Tecnico deja canal abierto despues de finalizar el soporte </option>
    													</select>
													    <div id="sa04-04"></div>
												   </div>
    												
												</div>
												
												<!-- eliminar -->
											    <div id="VT2" style="display: none">
												    <div id="id03" class="form-group">
    													<label>*Tipo de daño:</label>
    													<select id="tipo" onchange="pro_id3();" class="form-control select" style="width: 100%;" data-mask tabindex="8">
    													<option selected="selected" value="1" disabled>Seleccione..</option>
    													  <option value="1">Alineación de antena</option>
    													  <option value="2">Falla cable RCA/HDMI/Poder</option>
    													  <option value="3">Falla cable coaxial</option>
    													  <option value="4">Parametros en cero</option>
    													  <option value="5">Posible deco dañado</option>
    													  <option value="7">Daño LNB</option>
    													  <option value="6">CNRP - Sin Señal</option>
    													</select>
    													<div id="id03-03"></div>
    												</div>
    											    
    
    												<div id="id04" class="form-group">
    													<label>*Armario:</label>
    													<div class="input-group">
    													  <div class="input-group-addon">
    													<i class="fa fa-newspaper-o"></i>
    													  </div>
    													  <input type="text" class="form-control" id="localidad" onKeyPress="return soloLetras2(event)" value="AAAAA" data-mask tabindex="10" onBlur="pro_id4();" maxlength="20">
    													</div>
    													<div id="id04-04"></div>
    												</div>
												</div>
												<!-- eliminar -->
											
												<div id="id8" class="form-group">
													 <label>Observación:</label>
													 <textarea class="form-control" rows="2" id="dir" placeholder="..." style="resize: none; " data-mask tabindex="13" maxlength="245"></textarea>
												     <div id="id8-8"></div>
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
												    <!-- eliminar -->
                                                    <label style="padding-left:230px;">
                                                       <input type="checkbox" id="check">
                                                       Falla Omnicanal
                                                    </label>
                                                    
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
                                              <li><a href="#">TMO (4:15 a 4:29)
                                              <span id="stmo" class="pull-right text-green"> 
                                                    <i class="fa fa-refresh fa-spin"></i>
                                              </span></a></li>
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
                                              <td>Resuelto</td>
                                              <td><span id="scerrado" style="padding: 22px;"><i class="fa fa-refresh fa-spin"></i></span></td>
                                              <td></td>
                                              <td><span id="scerradoP" class="badge bg-green">-</span></td>
                                           
                                            </tr>
                                            </ul>
                                            
                                            <tr>
                                              <td></td>
                                              <td>Escalado</td>
                                              <td><span id="sinteraccion" style="padding: 22px;"><i class="fa fa-refresh fa-spin"></i></span></td>
                                              <td></td>
                                              <td><span id="sinteraccionP" class="badge bg-light-blue">-</span></td>

                                            </tr>

                                            <tr>
                                              <td></td>
                                              <td>LLamadas Colgadas</td>
                                              <td><span id="svt" style="padding: 22px;"><i class="fa fa-refresh fa-spin"></i></span></td>
                                              <td></td>
                                              <td><span id="sntP" class="badge bg-red">-</span></td>

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
				

				  function pro_carga(){
				    $("#example2").remove();
					$("#cargaG").load('4_COLEGA/php/user/gestiondiaria/val_table.php?a1='+campR.value); 
				  }
				
				
				document.oncontextmenu = function(){return false}
				
				var camp1 = document.getElementById("ani");
			    var camp2 = document.getElementById("datehour");
			    var camp3 = document.getElementById("omni");
			    var camp4 = document.getElementById("cedula");
			    var camp5 = document.getElementById("datemask");
			    var camp6 = document.getElementById("tmo");
			    var camp7 = document.getElementById("rol");
			    var camp8 = document.getElementById("dir");
			    
			    //aqui valido si es VT eliminar
			    var camp12 = document.getElementById("user");
			    var camp22 = document.getElementById("num_open");
			    var camp32 = document.getElementById("tipo");
			    var camp42 = document.getElementById("localidad");
			    var camp52 = document.getElementById("num_virtual");
			    //hasta aqui valido si es VT eliminar
			    
			    //aqui valido si es SA eliminar
			    var camp13 = document.getElementById("id_call");
			    var camp23 = document.getElementById("userG");
			    var camp33 = document.getElementById("datehour2");
			    var camp43 = document.getElementById("rol2");
			    //hasta aqui valido si es SA eliminar
			    
			    var campR = document.getElementById("refresh");
			    
			    var cancel = document.getElementById("cancel");
			    var save = document.getElementById("save");
			    
			    var a = 0;
			    var b = 0;
			    var c = 0;
			    var d = 0;
			    var e = 0;
			    var f = 0;
			    var g = 0;
			    
			    var bandera = 0;
			    
			    //aqui valido si es VT eliminar
			    var a1 = 0;
			    var b1 = 0;
			    var c1 = 0;
			    var d1 = 0;
			    var e1 = 0;
			    
			    //hasta aqui valido si es VT eliminar
			    
			    //aqui valido si es SA eliminar
			    var a2 = 0;
			    var b2 = 0;
			    var c2 = 0;
			    var d2 = 0;
			    //hasta aqui valido si es SA eliminar
			    
			    var y = 0;

			    var c1 = document.getElementById("id1");
			    var c2 = document.getElementById("id2");
			    var c3 = document.getElementById("id3");
			    var c4 = document.getElementById("id4");
			    var c5 = document.getElementById("id5");
			    var c6 = document.getElementById("id6");
			    var c7 = document.getElementById("id7");
			    var c8 = document.getElementById("id8");
			    
			    //aqui valido si es VT eliminar
			    var c12 = document.getElementById("id01");
			    var c22 = document.getElementById("id02");
			    var c32 = document.getElementById("id03");
			    var c42 = document.getElementById("id04");
			    var c52 = document.getElementById("id05");
			    //hasta aqui valido si es VT eliminar
			    
			    //aqui valido si es SA eliminar
			    var c13 = document.getElementById("sa1");
			    var c23 = document.getElementById("sa2");
			    var c33 = document.getElementById("sa3");
			    var c43 = document.getElementById("sa4");
			    //hasta aqui valido si es SA eliminar
			    
                var check1 = 0;
				var checkbox = document.getElementById('check');
                checkbox.addEventListener("change", validaCheckbox, false);
                function validaCheckbox(){
                  var checked = checkbox.checked;
                  if(checked){
                    check1 = 1;
                    camp3.value = "0000000";
                    camp3.disabled = true;
 				    c3.className = "form-group has-feedback";
					$('#id3-3').hide().html('').fadeIn(500);
			        e = 0;
                  }else{
                    check1 = 0;
                    camp3.value = "";
                    camp3.disabled = false;
                  }
                }
                
                function reload(){
                    $.ajax({ 
                        type: 'POST', 
                        url: 'php/user/gestiondiaria/reload.php', 
                        success: function(x){ 
                            camp2.value = x; 
                            camp33.value = x;
                        } 
                    }); 
                }
			    
			    function pro_refresh(){
			        document.getElementById('refresh10').style.display = '';
	                document.getElementById('refresh11').style.display = 'none';
	                $('#stmo').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
	                $('#stotal').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
			        $('#scerrado').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
			        $('#sinteraccion').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
			        $('#svt').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
			        $('#saudio').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
			        //$('#sguia').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
			        
			        var dataString = 'a1=' + campR.value;

			        $.ajax({
						type: 'POST',
						url: '4_COLEGA/php/user/gestiondiaria/val_refresh.php', 
						data:  dataString, 
						success: function(x){

						    if(x.split('_')[1] != 0 || x.split('_')[0] != 0){
    						    var T = x.split('_')[1] / x.split('_')[0];
                                T = T / 60;
                                T = T.toFixed(2);
                                A = T.split('.')[1];
                                T = Math.floor(T);
                                
                                A = A * 60;
                                
                                A = A / 100;
                                B = Math.trunc(A);
                    
                                var C = A - Math.floor(A);

                                if(C >= 0.5){
                                    B = B + 1;
                                }
                                
                                if(B < 10){
                                   B = "0" + B;
                                }

						    }else{
                                    T = 0;
                                    B = "00";
						    }
						    
						    var temp = x.split('_')[1] / x.split('_')[0];
						    
						    if (temp < 255 || temp > 269){
						        document.getElementById("stmo").className = "pull-right text-red";
						    }else{
						        document.getElementById("stmo").className = "pull-right text-green";
						    }

                            
						    document.getElementById("stmo").innerHTML = T + ":" + B;

	
							document.getElementById("stotal").innerHTML = x.split('_')[0];
                            if(x.split('_')[0] == 0){
                                document.getElementById('ver_des').style.display = 'none';
                            }else{
                                document.getElementById('ver_des').style.display = '';
                            }

							document.getElementById("scerrado").innerHTML = x.split('_')[2];
							
							   div = x.split('_')[8];

						        if(x.split('_')[2] != 0){
						            var cerraT = x.split('_')[2] * 100 / x.split('_')[0];
    						    	cerraT = cerraT.toFixed(1);
						            document.getElementById("scerradoP").innerHTML = cerraT + "%";
						        }else{
						            if (x.split('_')[0] == 0){
						               document.getElementById("scerradoP").innerHTML = "-";
						            }else{
						                document.getElementById("scerradoP").innerHTML = "0.0%";
						            }
						        }



							document.getElementById("sinteraccion").innerHTML = x.split('_')[3];
							
						        if(x.split('_')[3] != 0){
						            var interT = x.split('_')[3] * 100 / x.split('_')[0];
    						    	interT = interT.toFixed(1);
						            document.getElementById("sinteraccionP").innerHTML = interT + "%";
						        }else{
						             if (x.split('_')[0] == 0){
						               document.getElementById("sinteraccionP").innerHTML = "-";
						            }else{
						               document.getElementById("sinteraccionP").innerHTML = "0.0%";
						            }
						        }
							



							document.getElementById("svt").innerHTML = x.split('_')[4];
							
								if(x.split('_')[4] != 0){
						            var sntT = x.split('_')[4] * 100 / x.split('_')[0];
    						    	sntT = sntT.toFixed(1);
						            document.getElementById("sntP").innerHTML = sntT + "%";
						        }else{
						            if (x.split('_')[0] == 0){
						               document.getElementById("sntP").innerHTML = "-";
						            }else{
						               document.getElementById("sntP").innerHTML = "0.0%";
						            }
						        }


							document.getElementById("saudio").innerHTML = x.split('_')[6];
							
							    if(x.split('_')[6] != 0){
						            var saudioT = x.split('_')[6] * 100 / x.split('_')[0];
    						    	saudioT = saudioT.toFixed(1);
						            document.getElementById("saudioP").innerHTML = saudioT + "%";
						        }else{
						            if (x.split('_')[0] == 0){
						               document.getElementById("saudioP").innerHTML = "-";
						            }else{
						               document.getElementById("saudioP").innerHTML = "0.0%";
						            }
						        }
						        

						        
						}
					});
					
					document.getElementById('refresh10').style.display = 'none';
	                document.getElementById('refresh11').style.display = '';
			        
			    }

			    function pro_ani(){
			        camp1.value = camp1.value.replace(/ /g, "");
					var tam1 = camp1.value.length;
                    for(i = 0; i < tam1; i++) {
                        if(isNaN(camp1.value[i])){
                           c1.className = "form-group has-error";
    					   $('#id1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Ingrese sólo números.</span>').fadeIn(500);
    					   a = 1;
                        }
                    }
					if(camp1.value === ""){
					   c1.className = "form-group has-error";
					   $('#id1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
					   a = 1;
					}else{
					   c1.className = "form-group has-feedback";
					   $('#id1-1').hide().html('').fadeIn(500);
					   reload();
					   a = 0;
					}
				}
				
				function pro_fecha(){
					if(camp5.value === ""){
					   c5.className = "form-group has-error";
					   $('#id5-5').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
				       b = 1;
					}else if(!/^[0-9\/]+$/.test(camp5.value)){
				       c5.className = "form-group has-error";
				       $('#id5-5').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Fecha incompleta</span>').fadeIn(500);
				       b = 1;
					}else{
					   c5.className = "form-group has-feedback";
					   $('#id5-5').hide().html('').fadeIn(500);
					   b = 0;
					}
				}
				
				function pro_hora(){
					if(camp2.value === ""){
					   c2.className = "form-group has-error";
					   $('#id2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
					   c = 1;
					}else if(!/^[0-9\:]+$/.test(camp2.value)){
				       c2.className = "form-group has-error";
				       $('#id2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Hora incompleta</span>').fadeIn(500);
					   c = 1;
					}else{
					   c2.className = "form-group has-feedback";
					   $('#id2-2').hide().html('').fadeIn(500);
					   c = 0;
					}
				}
				
				function pro_tmo(){
					if(camp6.value === ""){
					   c6.className = "form-group has-error";
					   $('#id6-6').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
					   d = 1;
					}else if(!/^[0-9\:]+$/.test(camp6.value)){
				       c6.className = "form-group has-error";
				       $('#id6-6').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> TMO incompleto</span>').fadeIn(500);
					   d = 1;
					}else{
					   c6.className = "form-group has-feedback";
					   $('#id6-6').hide().html('').fadeIn(500);
					   d = 0;
					}
				}
				
				function pro_omni(){
				    e = 0;
				    camp3.value = camp3.value.replace(/ /g, "");
					var tam = camp3.value.length;
				    //aqui valido si esta repetido el numero de omnicanal
				    
				    
				    if(camp3.value === ""){
					   c3.className = "form-group has-error";
					   $('#id3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
					   e = 1;
					}else if (camp3.value.length < 4){
					   c3.className = "form-group has-error";
					   $('#id3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Ticket omnicanal incompleto</span>').fadeIn(500);
					   e = 1;
					}else if (camp3.value != "0000000"){
					    for(i = 0; i < tam; i++) {
                            if(isNaN(camp3.value[i])){
                               c3.className = "form-group has-error";
            				   $('#id3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Ingrese sólo números.</span>').fadeIn(500);
            				   e = 1;
                            }
                        }
                        if(e != 1){
        				    if (camp7.value === "1" || camp7.value === "3" || camp7.value === "4" || camp7.value === "5"){
        				        //valido si el estado es igual a Resuelto, Escalado N2, Escalado VT, Sin Audio Caida.
        				           var dataString = 'a1=' + camp3.value;
        				           $.ajax({
                    					type: 'POST',
                    					url: 'php/user/gestiondiaria/val_ticket_rep.php', 
                    					data:  dataString, 
                    					success: function(x){
                                               c3.className = "form-group has-feedback";
                                        	   $('#id3-3').hide().html('').fadeIn(500);
                                        	   e = 0;
                    					}
            			            });
        				    }else{
        				       c3.className = "form-group has-feedback";
                        	   $('#id3-3').hide().html('').fadeIn(500);
                        	   e = 0;
        				    }
                        }
				    }else{
					   c3.className = "form-group has-feedback";
					   $('#id3-3').hide().html('').fadeIn(500);
			           e = 0;
					}
					
					
					
					
				}
				
				function pro_estado(){
				    //aqui valido si esta repetido el numero de omnicnal
				    pro_omni();
				    
				    //aqui valido si es VT eliminar
				    if (camp7.value === "6"){
    				   if (confirm("\xbfCambiar campos a guia?")){
    				       camp1.value = "9999999999";
    				       camp3.value = "9999999";
    				       camp4.value = "9999999999";
    				       camp6.value = "01:00";
    				       document.getElementById("check").checked=false;
    				       document.getElementById("check").disabled = true;
    				       bandera = 1;
				       }
				    }else{
				        document.getElementById("check").disabled = false;
    				    bandera = 0;
				    }
				    if (camp7.value === "4"){
				       document.getElementById('SA1').style.display = 'none';
				       document.getElementById('SA2').style.display = 'none';
				       document.getElementById('VT1').style.display = 'none';
				       document.getElementById('VT2').style.display = 'none';
				       document.getElementById('o_id1').style.display = '';
				       document.getElementById('o_id2').style.display = 'none';
				    }else{
				       document.getElementById('VT1').style.display = 'none';
				       document.getElementById('VT2').style.display = 'none';
				       document.getElementById('o_id2').style.display = 'none';
				       document.getElementById('o_id1').style.display = '';
				    }
				    if (camp7.value === "5"){
				       document.getElementById('SA1').style.display = '';
				       document.getElementById('SA2').style.display = '';
				       document.getElementById('VT1').style.display = 'none';
				       document.getElementById('VT2').style.display = 'none';
				    }else{
				       document.getElementById('SA1').style.display = 'none';
				       document.getElementById('SA2').style.display = 'none';
				    }
				    // hasta aqui valido si es VT eliminar
					if(camp7.value === ""){
					   c7.className = "form-group has-error";
					   $('#id7-7').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione una opción</span>').fadeIn(500);
					   f = 1;
					}else{
					   c7.className = "form-group has-feedback";
					   $('#id7-7').hide().html('').fadeIn(500);
					   f = 0;
					}
				}
				
				function pro_ced(){
				    camp4.value = camp4.value.replace(/ /g, "");
					var tam2 = camp4.value.length;
                    for(i = 0; i < tam2; i++) {
                        if(isNaN(camp4.value[i])){
                           c4.className = "form-group has-error";
    					   $('#id4-4').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Ingrese sólo números.</span>').fadeIn(500);
    					   g = 1;
                        }
                    }
					if(camp4.value === ""){
					   c4.className = "form-group has-error";
					   $('#id4-4').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
					   g = 1;
					}else if(camp4.value.length < 10){
				       c4.className = "form-group has-error";
				       $('#id4-4').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Cédula / RUC incompleto</span>').fadeIn(500);
					   g = 1;
					}else{
					   c4.className = "form-group has-feedback";
					   $('#id4-4').hide().html('').fadeIn(500);
					   g = 0;
					}
					
				}
				
				//aqui valido si es VT eliminar
				function pro_id1(){
					if(camp12.value === ""){
					   c12.className = "form-group has-error";
					   $('#id01-01').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
					   a1 = 1;
					}else{
					   c12.className = "form-group has-feedback";
					   $('#id01-01').hide().html('').fadeIn(500);
					   a1 = 0;
					}
				}
                
				function pro_id3(){
					if(camp32.value === ""){
					   c32.className = "form-group has-error";
					   $('#id03-03').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione una opción</span>').fadeIn(500);
					   b1 = 1;
					}else{
					   c32.className = "form-group has-feedback";
					   $('#id03-03').hide().html('').fadeIn(500);
					   b1 = 0;
					}
				}
				
				function pro_id2(){
					if(camp22.value === ""){
					   c22.className = "form-group has-error";
					   $('#id02-02').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
					   c1 = 1;
					}else{
					   c22.className = "form-group has-feedback";
					   $('#id02-02').hide().html('').fadeIn(500);
					   c1 = 0;
					}
				}
				
				function pro_id4(){
					if(camp42.value === ""){
					   c42.className = "form-group has-error";
					   $('#id04-04').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
					   d1 = 1;
					}else{
					   c42.className = "form-group has-feedback";
					   $('#id04-04').hide().html('').fadeIn(500);
					   d1 = 0;
					}
				}
				
				function pro_id5(){
					if(camp52.value === ""){
					   c52.className = "form-group has-error";
					   $('#id05-05').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
					   e1 = 1;
					}else{
					   c52.className = "form-group has-feedback";
					   $('#id05-05').hide().html('').fadeIn(500);
					   e1 = 0;
					}
				}
                //hasta aqui valido si es VT eliminar
                
                //aqui comienzo SA
                function pro_sa1(){
                    camp13.value = camp13.value.replace(/ /g, "");
					var tam4 = camp13.value.length;
                    for(i = 0; i < tam4; i++) {
                        if(isNaN(camp13.value[i])){
                           c13.className = "form-group has-error";
    					   $('#sa01-01').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Ingrese sólo números.</span>').fadeIn(500);
    					   a2 = 1;
                        }
                    }
					if(camp13.value === ""){
					   c13.className = "form-group has-error";
					   $('#sa01-01').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
					   a2 = 1;
					}else{
					   c13.className = "form-group has-feedback";
					   $('#sa01-01').hide().html('').fadeIn(500);
					   a2 = 0;
					}
				}
				
				function pro_sa2(){
					if(camp23.value === ""){
					   c23.className = "form-group has-error";
					   $('#sa02-02').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
					   b2 = 1;
					}else{
					   c23.className = "form-group has-feedback";
					   $('#sa02-02').hide().html('').fadeIn(500);
					   b2 = 0;
					}
				}
				
				function pro_sa3(){
					if(camp33.value === ""){
					   c33.className = "form-group has-error";
					   $('#sa03-03').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
					   c2 = 1;
					}else{
					   c33.className = "form-group has-feedback";
					   $('#sa03-03').hide().html('').fadeIn(500);
					   c2 = 0;
					}
				}
				
				function pro_sa4(){
				    // hasta aqui valido si es VT eliminar
					if(camp43.value === ""){
					   c43.className = "form-group has-error";
					   $('#sa04-04').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione una opción</span>').fadeIn(500);
					   d2 = 1;
					}else{
					   c43.className = "form-group has-feedback";
					   $('#sa04-04').hide().html('').fadeIn(500);
					   d2 = 0;
					}
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
					    
					   var temp8 = campR.value;
					   document.getElementById("addU").reset();
					   campR.value = temp8;
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
					   
					   c7.className = "form-group has-feedback";
					   $('#id7-7').hide().html('').fadeIn(500);
					   
					   //aqui valido si es VT eliminar
					   c22.className = "form-group has-feedback";
					   $('#id02-02').hide().html('').fadeIn(500);
					   
					   c32.className = "form-group has-feedback";
					   $('#id03-03').hide().html('').fadeIn(500);
					   
					   c42.className = "form-group has-feedback";
					   $('#id04-04').hide().html('').fadeIn(500);
					   
					   c52.className = "form-group has-feedback";
					   $('#id05-05').hide().html('').fadeIn(500);
					   
					   c12.className = "form-group has-feedback";
					   $('#id01-01').hide().html('').fadeIn(500);
					   
					   document.getElementById('VT1').style.display = 'none';
				       document.getElementById('VT2').style.display = 'none';
				       document.getElementById('o_id2').style.display = 'none';
				       document.getElementById('o_id1').style.display = '';
				       document.getElementById('SA1').style.display = 'none';
				       document.getElementById('SA2').style.display = 'none';
				       
				       document.getElementById('SA1').style.display = 'none';
				       document.getElementById('sa2').style.display = 'none';
				       document.getElementById('SA2').style.display = 'none';
				       document.getElementById('sa4').style.display = 'none';
				       
				       c13.className = "form-group has-feedback";
					   $('#sa01-01').hide().html('').fadeIn(500);
					   
					   c23.className = "form-group has-feedback";
					   $('#sa02-02').hide().html('').fadeIn(500);
					   
					   c33.className = "form-group has-feedback";
					   $('#sa03-03').hide().html('').fadeIn(500);
					   
					   c43.className = "form-group has-feedback";
					   $('#sa04-04').hide().html('').fadeIn(500);
				       
				       window.scrollTo(500, 0);
					   //hasta aqui valido si es VT eliminar
					   camp1.focus();
					}
					
					function clean2(){
					  
					  if(camp1.value != "" || camp3.value != "" || camp4.value != "" || camp6.value != "" || camp7.value != "" ||  camp8.value != "" ){
					     if (confirm("\xbfBorrar información de campos?")){
					           var temp8 = campR.value;
        					   document.getElementById("addU").reset();
        					   campR.value = temp8;
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
        					   
        					   c7.className = "form-group has-feedback";
        					   $('#id7-7').hide().html('').fadeIn(500);
        					   
        					   //aqui valido si es VT eliminar
        					   c22.className = "form-group has-feedback";
        					   $('#id02-02').hide().html('').fadeIn(500);
        					   
        					   c32.className = "form-group has-feedback";
        					   $('#id03-03').hide().html('').fadeIn(500);
        					   
        					   c42.className = "form-group has-feedback";
        					   $('#id04-04').hide().html('').fadeIn(500);
        					   
        					   c52.className = "form-group has-feedback";
        					   $('#id05-05').hide().html('').fadeIn(500);
        					   
        					   c12.className = "form-group has-feedback";
        					   $('#id01-01').hide().html('').fadeIn(500);
        					   
        					   document.getElementById('VT1').style.display = 'none';
        				       document.getElementById('VT2').style.display = 'none';
        				       document.getElementById('o_id2').style.display = 'none';
        				       document.getElementById('o_id1').style.display = '';
        				       document.getElementById('SA1').style.display = 'none';
        				       document.getElementById('SA2').style.display = 'none';
        				       
        				       c13.className = "form-group has-feedback";
        					   $('#sa01-01').hide().html('').fadeIn(500);
        					   
        					   c23.className = "form-group has-feedback";
        					   $('#sa02-02').hide().html('').fadeIn(500);
        					   
        					   c33.className = "form-group has-feedback";
        					   $('#sa03-03').hide().html('').fadeIn(500);
        					   
        					   c43.className = "form-group has-feedback";
        					   $('#sa04-04').hide().html('').fadeIn(500);
        				       
        				       window.scrollTo(500, 0);
        					   //hasta aqui valido si es VT eliminar
        					   camp1.focus();
					         
					     }
					  } else{
					      
					   var temp8 = campR.value;
					   document.getElementById("addU").reset();
					   campR.value = temp8;
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
					   
					   c7.className = "form-group has-feedback";
					   $('#id7-7').hide().html('').fadeIn(500);
					   
					   //aqui valido si es VT eliminar
					   c22.className = "form-group has-feedback";
					   $('#id02-02').hide().html('').fadeIn(500);
					   
					   c32.className = "form-group has-feedback";
					   $('#id03-03').hide().html('').fadeIn(500);
					   
					   c42.className = "form-group has-feedback";
					   $('#id04-04').hide().html('').fadeIn(500);
					   
					   c52.className = "form-group has-feedback";
					   $('#id05-05').hide().html('').fadeIn(500);
					   
					   c12.className = "form-group has-feedback";
					   $('#id01-01').hide().html('').fadeIn(500);
					   
					   document.getElementById('VT1').style.display = 'none';
				       document.getElementById('VT2').style.display = 'none';
				       document.getElementById('o_id2').style.display = 'none';
				       document.getElementById('o_id1').style.display = '';
				       document.getElementById('SA1').style.display = 'none';
				       document.getElementById('SA2').style.display = 'none';
				       
				       c13.className = "form-group has-feedback";
					   $('#sa01-01').hide().html('').fadeIn(500);
					   
					   c23.className = "form-group has-feedback";
					   $('#sa02-02').hide().html('').fadeIn(500);
					   
					   c33.className = "form-group has-feedback";
					   $('#sa03-03').hide().html('').fadeIn(500);
					   
					   c43.className = "form-group has-feedback";
					   $('#sa04-04').hide().html('').fadeIn(500);
				       
				       window.scrollTo(500, 0);
					   //hasta aqui valido si es VT eliminar
					   camp1.focus();
					      
					  }

					}
					
					
					
				function addcase(){
				    
				    if(bandera == 0){
                      pro_estado();  
                    }
                    pro_ani();
                    pro_fecha();
                    pro_hora();
                    pro_tmo();
                    pro_omni();
                    pro_id1();
                    pro_id2();
                    pro_id3();
                    pro_id4();
                    pro_id5();
                    pro_sa1();
                    pro_sa2();
                    pro_sa3();
                    pro_sa4();
                    
                    //invierto fecha
                    var dia = parseInt(camp5.value.slice(0,2));
                    var mes = parseInt(camp5.value.slice(3,5));
                    var anio = parseInt(camp5.value.slice(-4));
                    
                    var amd = anio + '-' + mes + '-' + dia;
                    
                    //separo el TMO y lo convierto todo en segundos
                    var minutos = parseInt(camp6.value.slice(0,2));
                    var segundos = parseInt(camp6.value.slice(3,5));
                    minutos = minutos * 60;
                    var hour = minutos + segundos;
                    
                    //aqui valido si es VT eliminar
                    var xx=0;
                    if(camp7.value === '5'){
 
                      if (a === 0 && b === 0 && c === 0 && d === 0 && e === 0 && f === 0 && a2 === 0 && b2 === 0 && c2 === 0 && d2 === 0){
                            var dataString = 'a1=' + camp1.value + '&a2=' + camp2.value + '&a3=' + camp3.value  + '&a5=' + amd + '&a6=' + hour + '&a7=' + camp7.value + '&a8=' + camp8.value + '&b1=' + camp13.value + '&a21=' + camp23.value + '&a31=' + camp33.value + '&a41=' + camp43.value + '&a99=' + check1  + '&vb=Si';
                            xx = 2;
                      }
                    }else{
                       if (a === 0 && b === 0 && c === 0 && d === 0 && e === 0 && f === 0 ){
                            var dataString = 'a1=' + camp1.value + '&a2=' + camp2.value + '&a3=' + camp3.value  + '&a5=' + amd + '&a6=' + hour + '&a7=' + camp7.value + '&a8=' + camp8.value + '&a99=' + check1 + '&vb=No';
                            xx = 1;

                       }
                    }//eliminar cierre para VT 

                    if(xx === 1 || xx === 2){

                        if (confirm("\xbfContinuar y guardar?")){
                            cancel.disabled = true;
    						save.disabled = true;
                            $('#Msj_Error').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="25" height="25"/>Guardando...</p>').fadeIn(500);
    							$.ajax({
    								type: 'POST',
    								url: '4_COLEGA/php/user/gestiondiaria/val_addges.php', 
    								data:  dataString, 
    								success: function(x){
    									if(x==1){
    										$('#Msj_Error').hide().html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Guardado!</strong> Gestión guardada.<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
                    						cancel.disabled = false;
                    						save.disabled = false;
    						            	check1 = 0;
    						            	camp3.disabled=false;
    						            	camp7.value = 1;
    						            	pro_estado();
    									    
    									    camp1.focus();
    									    pro_refresh();
    									    reload();
    									    
    									    $('#Msj_Error').fadeOut(9000);
    									    pro_charge();
    									    clean();
    									    //eliminar PPV tmp
    									    //$('#modal-pruebaPPV').modal('show');
    									    //eliminar PPV tmp
    									    
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