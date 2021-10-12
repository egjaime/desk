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
					Cargar Retención
				  </h1>
				  <ol class="breadcrumb">
					<li><a href="menu.php"><i class="fa fa-dashboard"></i> Principal</a></li>
					<li class="active">Cargar Retención</li>
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
													<label>*N° de Servicio:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-phone"></i>
													  </div>
													  <input type="text" class="form-control" id="ani" data-mask tabindex="1" onKeyPress="return soloNumeros(event)" maxlength="10">
													</div>
													<div id="id1-1"></div>
												</div>
												

    											
    											<div id="id00" class="form-group">
    													<label>*Estado de la llamada:</label>
    													<select id="estado" onChange="mostrar();" class="form-control select" style="width: 100%;" data-mask tabindex="8">
    													<option selected="selected" value="" disabled>Seleccione..</option>
													  <option value="1">Retenido</option>
													  <option value="2">No Retenido</option>
													  <option value="3">Pendiente</option>
    													</select>
    													<div id="id00-00"></div>
    											</div>

												<div id="id03" class="form-group">
    													<label>*Beneficio otorgado:</label>
    													<select id="tipo" class="form-control select" style="width: 100%;" data-mask tabindex="8">
    													<option selected="selected" value="" disabled>Seleccione..</option>
													  <option id="o1" value="Economico">Económico</option>
													  <option id="o2" value="No Economico">No Económico</option>
													  <option id="o3" value="Ambos">Ambos</option>
													  <option id="o4" value="PENDIENTE">Pendiente</option>
													  <option id="o5" value="NO RETENIDO">No retenido</option>
    													</select>
    													<div id="id03-03"></div>
    											</div>
												
											<div id="o_id1">	
												<div class="form-group">
                                                  <p class="help-block">* Campos Obligatorios.</p>
                                                </div>
                                            </div>
									</div>
											
											
											
											<!-- /.columna derecha -->
											<div class="col-md-6">
											    
											    
											    <div id="id5" class="form-group">
													<label>*Fecha de la llamada:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-calendar"></i>
													  </div>
													  <input type="text" class="form-control" id="datemask" readonly="readonly" value="<?php date_default_timezone_set("America/Guayaquil"); echo date("d/m/Y"); ?>" data-mask tabindex="2" >
													</div>
													<div id="id5-5"></div>
												</div>


												<div id="id8" class="form-group">
													 <label>Observación:</label>
													 <textarea class="form-control" rows="4" id="dir" placeholder="..." style="resize: none; " data-mask tabindex="13" maxlength="500"></textarea>
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
														<div class="box-tools" id="MsjError" align="center">
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
                                                    
													<select id="refresh2"  onchange="pro_refresh();" class="form-control select2" style="width: 100%;">
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
                                              <li><a href="#">Retenciones
                                              <span  id="stotal" class="pull-right text-green">  
                                                <i class="fa fa-refresh fa-spin"></i>
                                              </span></a></li>
                                            </ul>
                                            
                                            <ul class="nav nav-pills nav-stacked">
                                              <li><a href="#">No Retenidos
                                              <span  id="stotalN" class="pull-right text-green">  
                                                <i class="fa fa-refresh fa-spin"></i>
                                              </span></a></li>
                                            </ul>
                                            
                                           <ul class="nav nav-pills nav-stacked">
                                              <li><a href="#">Pendientes
                                              <span  id="stotalP" class="pull-right text-green">  
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
				var camp1 = document.getElementById("ani");
				var camp5 = document.getElementById("datemask");
				var camp32 = document.getElementById("tipo");
				var camp00 = document.getElementById("estado");
				var camp42 = document.getElementById("dir");
				var c32 = document.getElementById("id03");
				var c00 = document.getElementById("id00");
				var c5 = document.getElementById("id5");
				var c1 = document.getElementById("id1");
				var campR = document.getElementById("refresh2");
				
				pro_refresh();

				  function pro_carga(){
				    $("#example2").remove();
					$("#cargaG").load('php/user/gestiondiaria/val_table.php?a1='+campR.value); 
				  }
				
				
				document.oncontextmenu = function(){return false}


                function pro_refresh(){
	                $('#stotal').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
	                $('#stotalN').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
	                $('#stotalP').hide().html('<i class="fa fa-refresh fa-spin">').fadeIn(500);
			        
			        var dataString2 = 'a1=' + campR.value;
			        $.ajax({
						type: 'POST',
						url: '5_ESPECIFICAS/php/val_refresh.php', 
						data:  dataString2, 
						success: function(x){
						    
						    document.getElementById("stotal").innerHTML = x.split('_')[0];
						    document.getElementById("stotalN").innerHTML = x.split('_')[1];
						    document.getElementById("stotalP").innerHTML = x.split('_')[2];

						}
					});
 
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
					
					
					function mostrar() {
					    plan1 = document.getElementById('estado');
					    var ret7 = document.getElementById("tipo");
                        o1 = document.getElementById('o1');
                       	o2 = document.getElementById('o2');
                       	o3 = document.getElementById('o3');
                       	o4 = document.getElementById('o4');

                
                        if (plan1.value == "1"){
                            ret7.value = "";
                            o4.style.display = 'none';
                            o1.style.display = '';
                            o2.style.display = '';
                            o3.style.display = '';
                            o5.style.display = 'none';
                        }else if (plan1.value == "2") {
                            ret7.value = "";
                            o4.style.display = 'none';
                            o1.style.display = 'none';
                            o2.style.display = 'none';
                            o3.style.display = 'none';
                            o5.style.display = '';
                        }else if (plan1.value == "3") {
                            ret7.value = "";
                            o4.style.display = '';
                            o1.style.display = 'none';
                            o2.style.display = 'none';
                            o3.style.display = 'none';
                            o5.style.display = 'none';
                        }
                    }


				function addcase(){
				    y = 0;

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
					
					
                    if(camp1.value === ""){
					   c1.className = "form-group has-error";
					   $('#id1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Complete este campo</span>').fadeIn(500);
					   a = 1;
					}else{
					   c1.className = "form-group has-feedback";
					   $('#id1-1').hide().html('').fadeIn(500);
					   a = 0;
					}
					
					
                    if(camp32.value === ""){
					   c32.className = "form-group has-error";
					   $('#id03-03').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione una opción</span>').fadeIn(500);
					   c = 1;
					}else{
					   c32.className = "form-group has-feedback";
					   $('#id03-03').hide().html('').fadeIn(500);
					   c = 0;
					}
					
					if(camp00.value === ""){
					   c00.className = "form-group has-error";
					   $('#id00-00').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione estado</span>').fadeIn(500);
					   d = 1;
					}else{
					   c00.className = "form-group has-feedback";
					   $('#id00-00').hide().html('').fadeIn(500);
					   d = 0;
					}
                    
                    var dia = parseInt(camp5.value.slice(0,2));
                    var mes = parseInt(camp5.value.slice(3,5));
                    var anio = parseInt(camp5.value.slice(-4));
                    
                    var amd = anio + '-' + mes + '-' + dia;

                    if (b === 0 && a === 0 && c === 0 && d === 0){
                        
                       var dataString = 'a1=' + camp1.value + '&a2=' + amd + '&a3=' + camp32.value + '&a4=' + camp42.value + '&a5=' + camp00.value
                       y = 1;
                    }
                        
                      if (y === 1){
                        if (confirm("\xbfContinuar y guardar?")){
                            cancel.disabled = true;
    						save.disabled = true;
                            $('#MsjError').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="25" height="25"/>Guardando...</p>').fadeIn(500);

    							$.ajax({
    								type: 'POST',
    								url: '5_ESPECIFICAS/php/save_ret.php', 
    								data:  dataString, 
    								success: function(x){
    									if(x==1){
    										$('#MsjError').hide().html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Guardado!</strong> Retención ingresada con éxito.<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
                    						cancel.disabled = false;
                    						save.disabled = false;
                    						camp1.value = "";
                    						camp32.value = "";
                    						camp00.value = "";
                    						camp42.value = "";
    									    camp1.focus();
    									    pro_refresh();
    									    pro_charge();
    									    pro_charge3();
    									    $('#MsjError').fadeOut(5000);
    									}
    									
    								}
    							});
    					  }else{
    					    return 0;
    				    }
                      }
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