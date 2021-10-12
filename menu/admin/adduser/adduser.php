<?php
  //sleep(1);
  session_start();
  include '../../../php/conexion_bd.php';
  if(!empty($_SESSION['id'])){ 
  //valido si el usuario esta bloqueado
  		$trx="SELECT activo FROM usuarios WHERE id={$_SESSION['id']}";  
		$resB=mysqli_query($enlace,$trx);
		$filaB = mysqli_fetch_array($resB);
		if ($filaB['activo'] != 3){
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
				</style> 
         
			<link rel="stylesheet"
				href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
			</head>
			<body class="hold-transition skin-blue sidebar-mini">

				<div class="loader2" id="loader2"></div>

				<section class="content-header">
				  <h1>
					Agregar Usuario
				  </h1>
				  <ol class="breadcrumb">
					<li><a href="menu.php"><i class="fa fa-dashboard"></i> Principal</a></li>
					<li><a>Administrador</a></li>
					<li class="active">Agregar Usuario</li>
				  </ol>
				</section>
				<form action="" method="post" enctype="multipart/form-data" name="addU" id="addU">
					<!-- Main content -->
					<section class="content" >
					  <!-- SELECT2 EXAMPLE -->
						<div class="row">
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-8">
								<div class="box box-default">
									<!-- /.box-header -->
									<div class="box-body">
										<div class="row">
											<!-- /.columna izquierda -->
											<div class="col-md-6">
											    

												<div id="camp1" class="form-group">
													<label>*Cédula:</label>
													<input type="text" class="form-control" id="ci" placeholder="Ingrese cédula.." maxlength="10" tabindex="1" onKeyPress="return soloNumeros(event)">
												</div>
												
												<div id="camp2" class="form-group">
													<label>*1er Nombre:</label>
													<input type="text" class="form-control" id="fname" placeholder="Ingrese primer nombre.." tabindex="3" onkeypress="return soloLetras(event)">
												</div>	
												
												
												<div id="camp3" class="form-group">
													<label>*1er Apellido:</label>
													<input type="text" class="form-control" id="flastname" placeholder="Ingrese primer apellido.." tabindex="5" onkeypress="return soloLetras(event)">
												</div>	
												
												<div id="camp4" class="form-group">
													<label>*Fecha de Nacimiento:</label>
													<div class="input-group">
													  <div class="input-group-addon">
													<i class="fa fa-calendar"></i>
													  </div>
													  <input type="text" class="form-control" id="fnac" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask tabindex="7" >
													</div>
													<!-- /.input group -->
												</div>
												  
												<div class="form-group">
													<label>Teléfono Convencional:</label>
													<div class="input-group">
													  <div class="input-group-addon">
														<i class="fa fa-phone"></i>
													  </div>
													  <input type="text" class="form-control" id="tcon" data-inputmask='"mask": "(99) 999-9999"' data-mask tabindex="9" >
													</div>
													<!-- /.input group -->
												</div>	
												
												<div id="camp5" class="form-group">
    							            <label for="exampleInputEmail1">*Correo Eléctronico:</label>
    							             <input type="email" class="form-control" id="email" placeholder="correo@impulsasc.com" tabindex="11">
    						             </div>
												
												<div id="camp6" class="form-group">
													 <label>*Dirección:</label>
													 <textarea class="form-control" rows="4" id="dir" placeholder="Ingrese dirección.." style="resize: none; " tabindex="13" maxlength="245"></textarea>
												</div>
												
    																		  
												
									</div>
											
											
											
											<!-- /.columna derecha -->
											<div class="col-md-6">
											    
											    
												<div id="camp7" class="form-group">
													<label>*Rol:</label>
													<select id="rol" class="form-control select2" style="width: 100%;" >
													<option selected="selected" value="" disabled>Seleccione..</option>
													  <option value="3">Usuario</option>
													  <option value="2">Supervisor</option>
													  <option value="1">Administrador</option>
													</select>
												</div>
												
												
												 <div class="form-group">
													<label>2do Nombre:</label>
													<input type="text" class="form-control" id="sname" placeholder="Ingrese segundo nombre.." tabindex="4" onkeypress="return soloLetras(event)">
												</div>	
												 <div class="form-group">
													<label>2do Apellido:</label>
													<input type="text" class="form-control" id="slastname" placeholder="Ingrese segundo apellido.." tabindex="6" onkeypress="return soloLetras(event)">
												</div>
												
												<div id="camp8" class="form-group">
													<label>*Usuario:</label>
													<div class="input-group">
													  <div class="input-group-addon">
														<i class="fa fa-user"></i>
													  </div>
													  <input type="text" class="form-control" id="user" placeholder="Ingrese usuario.." tabindex="8" onkeypress="return soloLetras2(event)">
													</div>
													<!-- /.input group -->
												</div>
												<div class="form-group">
													<label>Teléfono Celular:</label>
													<div class="input-group">
													  <div class="input-group-addon">
														<i class="fa fa-mobile-phone (alias)"></i>
													  </div>
													  <input type="text" class="form-control" id="tcel" data-inputmask='"mask": "(999) 999-9999"' data-mask tabindex="10" >
													</div>
													<!-- /.input group -->
												</div>
												
   
												<div class="form-group">
													<label>En caso de emergencia (Persona Contacto):</label>
													<div class="input-group">
													  <div class="input-group-addon">
														<i class="fa fa-user-plus"></i>
													  </div>
													  <input type="text" class="form-control" id="pcontact" placeholder="Ingrese nombre y apellido.." tabindex="12">
													</div>		
												</div>	
												<div class="form-group">
													<label>Teléfono persona emergencia:</label>
													<div class="input-group">
													  <div class="input-group-addon">
														<i class="fa fa-phone"></i>
													  </div>
													  <input type="text" class="form-control" id="tpcontact" data-inputmask='"mask": "(999) 999-9999"' data-mask tabindex="14" >
													</div>
													<!-- /.input group -->
												</div>    
												
												<div id="camp445" class="form-group">
													<label>*Servicios:</label>
													<input type="text" class="form-control" id="servicio" placeholder="Ingrese num servicios" tabindex="16" >
												</div>	
												
												<div id="camp9" class="form-group">
                                                  <p class="help-block">* Campos Obligatorios.</p>
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
														<button type="button" id="cancel" onClick="clean();" class="btn btn-info pull-right">Cancelar</button>
													</td>
													<td width="2%">	
													</td>
													<td width="49%">
														<button type="button" id="save" onClick="adduser();" class="btn btn-info pull-left" >Guardar</button>
													 </td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</section>
				</form>

				<!-- Select2 
				<script src="assets/bower_components/select2/dist/js/select2.full.min.js"></script>-->
				<!-- InputMask -->
				<script src="assets/plugins/input-mask/jquery.inputmask.js"></script>
				<script src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
				<!--<script src="assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
				<!-- bootstrap datepicker 
				<script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>-->
				<!-- bootstrap color picker 
				<script src="assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>-->
				<!-- SlimScroll 
				<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>-->
				<!-- iCheck 1.0.1
				<script src="assets/plugins/iCheck/icheck.min.js"></script>-->
				<!-- Page script -->
				<script>

				var camp1 = document.getElementById("camp1");
			    var camp2 = document.getElementById("camp2");
			    var camp3 = document.getElementById("camp3");
			    var camp4 = document.getElementById("camp4");
			    var camp5 = document.getElementById("camp5");
			    var camp6 = document.getElementById("camp6");
			    var camp7 = document.getElementById("camp7");
			    var camp8 = document.getElementById("camp8");
			    var camp9 = document.getElementById("camp9");

				  $(function () {
					//Datemask dd/mm/yyyy
					$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
					//Datemask2 mm/dd/yyyy
					$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
					//Money Euro
					$('[data-mask]').inputmask()

					//Date picker
					$('#datepicker').datepicker({
					  autoclose: true
					})

					//iCheck for checkbox and radio inputs
					$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
					  checkboxClass: 'icheckbox_minimal-blue',
					  radioClass   : 'iradio_minimal-blue'
					})

				  })
				  
					function soloNumeros(e){
						var key = window.Event ? e.which : e.keyCode
						return ((key >= 48 && key <= 57) || (key==8)) 
     				}
     				
     				function redno(){
     				    camp1.className = "form-group";
     				    camp2.className = "form-group";
     				    camp3.className = "form-group";
     				    camp4.className = "form-group";
     				    camp5.className = "form-group";
     				    camp6.className = "form-group";
     				    camp7.className = "form-group";
     				    camp8.className = "form-group";
     				    camp9.className = "form-group";
     				    
     				    
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
						document.getElementById("addU").reset();
						redno();
					}
					
				function adduser(){
					var a1 = document.getElementById("ci"); //obligatorio
					var a2 = document.getElementById("fname"); //obligatorio
					var a3 = document.getElementById("flastname"); //obligatorio
					var a4 = document.getElementById("fnac"); //obligatorio
					var a5 = document.getElementById("tcon");
					var a6 = document.getElementById("dir"); //obligatorio
					var a7 = document.getElementById("rol"); //obligatorio
					var a8 = document.getElementById("sname");
					var a9 = document.getElementById("slastname");
					var a10 = document.getElementById("user"); //obligatorio
					var a11 = document.getElementById("tcel");
					var a12 = document.getElementById("pcontact");
					var a13 = document.getElementById("tpcontact");
					var a14 = document.getElementById("email")
					var b1 = document.getElementById("cancel");
					var b2 = document.getElementById("save");
					var r45 = document.getElementById("camp445")
					
					expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

					var dataString = 'a1=' + a1.value + '&a2=' + a2.value + '&a3=' + a3.value + '&a4=' + a4.value + '&a5=' + a5.value + '&a6=' + a6.value + '&a7=' + a7.value + '&a8=' + a8.value + '&a9=' + a9.value + '&a10=' + a10.value + '&a11=' + a11.value + '&a12=' + a12.value  + '&a13=' + a13.value + '&a14=' + a14.value + '&a15=' + r45.value;
					
					if (a1.value === "" || a2.value === "" || a3.value === "" || a4.value === "" || a6.value === "" || a7.value === "" || a10.value === "" || a14.value === "" || r45.value === "") {
					    
					    if(a1.value === ""){
					        camp1.className = "form-group has-error";
					    }else{
					        camp1.className = "form-group";
					    }
					    if(a2.value === ""){
					        camp2.className = "form-group has-error";
					    }else{
					        camp2.className = "form-group";
					    }
					    if(a3.value === ""){
					        camp3.className = "form-group has-error";
					    }else{
					        camp3.className = "form-group";
					    }
					    if(a4.value === ""){
					        camp4.className = "form-group has-error";
					    }else{
					        camp4.className = "form-group";
					    }
					    if(a6.value === ""){
					        camp6.className = "form-group has-error";
					    }else{
					        camp6.className = "form-group";
					    }
					    if(a7.value === ""){
					        camp7.className = "form-group has-error";
					    }else{
					        camp7.className = "form-group";
					    }
					    if(a10.value === ""){
					        camp8.className = "form-group has-error";
					    }else{
					        camp8.className = "form-group";
					    }
					    if(a14.value === ""){
					        camp5.className = "form-group has-error";
					    }else{
					        camp5.className = "form-group";
					    }
					    if(r45.value === ""){
					        camp445.className = "form-group has-error";
					    }else{
					        camp445.className = "form-group";
					    }

						$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>¡Error!</strong> Complete todos los campos obligatorios (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
						return false;
					}else if(!/^[0-9\-]+$/.test(a4.value)){
					       redno();
					       camp4.className = "form-group has-error";
					       $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>¡Error!</strong> Valide la fecha de nacimiento(*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
						      return false;
					}else if(!expr.test(a14.value)){
					       redno();
					       camp5.className = "form-group has-error";
					       $('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>¡Error!</strong> Correo Eléctronico inválido(*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
						      return false;
					}else{
					    redno();
						if (confirm("\xbfContinuar y guardar?")){
							b2.disabled = true;
							$('#MsjError').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="50" height="50"/>Guardando...</p>').fadeIn(500);
							$.ajax({
								type: 'POST',
								url: 'php/admin/val_adduser.php', 
								data:  dataString, 
								success: function(x){
									if(x==1){
										$('#MsjError').hide().html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Guardado!</strong> Usuario creado con éxito.<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
										redno();
									    clean();
									}
									else if(x==2){
										$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> Complete todos los campos obligatorios (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
									}
									else if(x==3){
										$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> Cédula ya existe<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
										camp1.className = "form-group has-error";

									}
									else if(x==4){
										$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> Usuario ya existe<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
										 camp8.className = "form-group has-error";
									}
									b2.disabled = false;
								}
							});
						}else{
							return 0;
						}
					}
				    return false;
				} 
				
				$('#loader2').fadeOut(1500);
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