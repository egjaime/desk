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
					background: url(../../../assets/img/Preloader_2.gif') 50% 50% no-repeat rgb(249,249,249);
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
					Eliminar Usuario
				  </h1>
				  <ol class="breadcrumb">
					<li><a href="../menu.php"><i class="fa fa-dashboard"></i> Principal</a></li>
					<li><a>Administrador</a></li>
					<li class="active">Eliminar Usuario</li>
				  </ol>
				</section>
				<form action="" method="post" enctype="multipart/form-data" name="addU" id="addU">
					<!-- Main content -->
					<section class="content" >
					
						<div class="row">
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-8">
								<div class="box box-default">
									<!-- /.box-header -->
									<div class="box-body">
										<div class="row">
											<!-- /.columna izquierda -->
											<div class="col-md-6">
												<div class="form-group">
													<label>Búsqueda por:</label>
													<select id="bus" class="form-control select2" style="width: 100%;" onchange='mostrarBusqueda()'>
													<option selected="selected" value="" disabled>Seleccione..</option>
													  <option value="user">Usuario</option>
													  <option value="ci">Cédula</option>
													</select>
												</div>
											</div>
											
											<!-- /.columna derecha -->
											<div class="col-md-6">
											
											
												<div class="form-group" style="display:none" id="us2">
													<label>Usuarios:</label>
													<select class="form-control select2" style="width: 100%;" id="usD">
													<option selected="selected" value="" disabled>Seleccione..</option>
													    <?php
															$trx9="SELECT id, usuario FROM usuarios";  
															$resS=mysqli_query($enlace,$trx9);
														    while ($filaX = mysqli_fetch_array($resS)) {
																echo '<option value="'.$filaX['id'].'">'.$filaX['usuario'].'</option>';
														    }
														?>
													</select>
												</div>
													
												<div class="form-group" style="display:none" id="ci2">
													<label>Cédula:</label>
													<input type="text" class="form-control" id="ciD" placeholder="Ingrese cédula.." maxlength="10" tabindex="1" onKeyPress="return soloNumeros(event)">
												</div>
												
											</div>
											
											<div class="row">
												<div class="col-md-12">
													<div class="col-md-12">
														<div class="box-tools" id="MsjError0" align="center">
															<!–mensaje de error–> 
														</div>
													</div>
												</div>
											</div>
											
											<table class="table text-center">
												<tr>
													<td width="49%">
													</td>
													<td width="2%">	
														<button type="button" id="buscar1" onClick="find();" class="btn btn-info pull-left" >Buscar</button>
													</td>
													<td width="49%">
														
													</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
				

					  <!-- SELECT2 EXAMPLE -->
						<div class="row" style="display:none" id="rowD">
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-8">
								<div class="box box-default">
									<!-- /.box-header -->
									<div class="box-body">
										<div class="row">
											<!-- /.columna izquierda -->
											<div class="col-md-6">
											
												<div class="form-group">
													<label>*Cédula:</label>
													<input type="text" class="form-control" value="" id="ci" placeholder="Ingrese cédula.." maxlength="10" tabindex="1" onKeyPress="return soloNumeros(event)">
												</div>
												<div class="form-group">
													<label>*1er Nombre:</label>
													<input type="text" class="form-control" id="fname" placeholder="Ingrese primer nombre.." tabindex="3" onKeyPress="return soloLetras(event)">
												</div>	
												<div class="form-group">
													<label>*1er Apellido:</label>
													<input type="text" class="form-control" id="flastname" placeholder="Ingrese primer apellido.." tabindex="5" onKeyPress="return soloLetras(event)">
												</div>						  
												<div class="form-group">
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
												<div class="form-group">
													 <label>*Dirección:</label>
													 <textarea class="form-control" rows="4" id="dir" placeholder="Ingrese dirección.." style="resize: none; " tabindex="11" maxlength="245"></textarea>
												</div>
											</div>
											
											<!-- /.columna derecha -->
											<div class="col-md-6">
												<div class="form-group">
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
													<input type="text" class="form-control" id="sname" placeholder="Ingrese segundo nombre.." tabindex="4" onKeyPress="return soloLetras(event)">
												</div>	
												 <div class="form-group">
													<label>2do Apellido:</label>
													<input type="text" class="form-control" id="slastname" placeholder="Ingrese segundo apellido.." tabindex="6" onKeyPress="return soloLetras(event)">
												</div>
												<div class="form-group">
													<label>*Usuario:</label>
													<div class="input-group">
													  <div class="input-group-addon">
														<i class="fa fa-user"></i>
													  </div>
													  <input type="text" class="form-control" id="user" placeholder="Ingrese usuario.." tabindex="8" onKeyPress="return soloLetras2(event)">
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
													  <input type="text" class="form-control" id="tpcontact" data-inputmask='"mask": "(999) 999-9999"' data-mask tabindex="10" >
													</div>
													<!-- /.input group -->
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
														<button type="button" id="delete" onClick="eliminar();" class="btn btn-info pull-left" >Eliminar</button>
												  </td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</section>
					<!-- Bootstrap 3.3.7 -->
				<!-- <script src="../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->

				<!-- InputMask -->
				<script src="assets/plugins/input-mask/jquery.inputmask.js"></script>
				<script src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
				<script src="assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
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

				  $(function () {
					//Initialize Select2 Elements
					$('.select2').select2()

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
						document.getElementById('rowD').style.display ='none';
						document.getElementById('buscar1').disabled = false;
						document.getElementById('bus').disabled = false;
						document.getElementById('usD').disabled = false;
						document.getElementById('ciD').disabled = false;
						document.getElementById('usD').value = "";
					}
					
				function eliminar(){
					var a1 = document.getElementById("ci"); //obligatorio
					var dataString = '&a1=' + a1.value;
					if (confirm("\xbfSeguro desea eliminar al usuario?")){
						document.getElementById('delete').disabled = true;
						$.ajax({
							type: 'POST',
							url: 'php/admin/val_deleteuser.php', 
							data:  dataString,
							success: function(x){
								if(x==1){
									$('#MsjError0').hide().html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError0()"  aria-hidden="true">&times;</button><strong>Eliminado!</strong> Usuario eliminado con éxito.<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
									clean();
								}
								else if(x==2){
									$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> Datos incompletos para eliminar(*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
									document.getElementById('delete').disabled = false;
								}
							}
						});
					}else{
						return 0;
					}
					return false;
				}
			    
				
				function mostrarBusqueda(){
					if (document.getElementById('bus').value=="user"){
						document.getElementById('ci2').style.display ='none';
						document.getElementById('us2').style.display ='inherit';
					}else{
						document.getElementById('us2').style.display ='none';
						document.getElementById('ci2').style.display ='inherit';
					}
				}
				
				function find(){
					if (document.getElementById('bus').value==""){
						alert("Seleccione el tipo de búsqueda");
					}else{
						if(document.getElementById('bus').value=="ci"){
							if(document.getElementById('ciD').value==""){
								alert("Indique numero de cédula a buscar");
							}else{
								$band=1;
								$val=document.getElementById('ciD').value;
								busqueda();
							}
						}else{
							if(document.getElementById('usD').value==""){
								alert("Seleccione el usuario a buscar");
							}else{
								$band=2;
								$val=document.getElementById('usD').value;
								busqueda();
							}
						}
					}
					return 0;
				}
				
				function busqueda(){
					var dataStringx = 'c1=' + $band + '&c2=' + $val;
					document.getElementById('buscar1').disabled = true;
					$.ajax({
						type: 'POST',
						url: 'php/admin/val_moduser.php', 
						data:  dataStringx,
						success: function(x){
							if(x==2){
								$('#MsjError0').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError2()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> No se recibió ningun valor<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
								document.getElementById('buscar1').disabled = false;
							}
							else if(x==3){
								$('#MsjError0').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError2()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> Cédula / Usuario no existe<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
								document.getElementById('buscar1').disabled = false;
							}else{
								document.getElementById('bus').disabled = true;
								document.getElementById('usD').disabled = true;
								document.getElementById('ciD').disabled = true;
								
								document.getElementById('rol').value = x.split('$$')[0];
								document.getElementById('fname').value = x.split('$$')[1];
								document.getElementById('sname').value = x.split('$$')[2];
								document.getElementById('flastname').value = x.split('$$')[3];
								document.getElementById('slastname').value = x.split('$$')[4];
								document.getElementById('ci').value = x.split('$$')[5];
								document.getElementById('fnac').value = x.split('$$')[6];
								document.getElementById('user').value = x.split('$$')[7];
								document.getElementById('dir').value = x.split('$$')[8];
								document.getElementById('tcon').value = x.split('$$')[9];
								document.getElementById('tcel').value = x.split('$$')[10];
								document.getElementById('pcontact').value = x.split('$$')[11];
								document.getElementById('tpcontact').value = x.split('$$')[12];
								document.getElementById('ci').disabled = true;
								document.getElementById('user').disabled = true;
								
								
								document.getElementById('rowD').style.display ='inherit';
								
							}

						}
					});
				}
				
				$('#loader2').fadeOut(500);
				</script>

			</form>

				</body>
			</html>


<?php
        }else{//else del validar si esta bloqueado.
		    session_destroy();
			echo '<script language =  javascript>  alert("Usuario Bloqueado, contacte al administrador"); self.location = "/../../../index.php"; </script>';
		}
	}else{
	   echo '<script language =  javascript>  self.location = "/../../../index.php" </script>';
	}
	mysqli_close($enlace);
?>