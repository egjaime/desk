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
					Modificar Usuario
				  </h1>
				  <ol class="breadcrumb">
					<li><a href="../menu.php"><i class="fa fa-dashboard"></i> Principal</a></li>
					<li><a>Administrador</a></li>
					<li class="active">Modificar Usuario</li>
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
											
											<div id="carga" align="center"></div>
											
											<table class="table text-center">
												<tr>
													<td width="49%">
													</td>
													 <td width="2%">	
														<button type="button" id="cancel" onClick="clean();" class="btn btn-info pull-left" >Cancelar</button>
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
                      

                      
                      
                  <div class="container1" id="cont1" style="display:none">
                   <div class="row" align="center">
					<div class="col-md-2">&nbsp;</div>
					  <div class="col-md-8">
					   <div class="box box-default">
						 <div class="box-body">
									    
									    
                            <div class="row">
                                <div id="content" class="col-lg-12">
                        			<form method="post" action="#" id="fr1" enctype="multipart/form-data">
                        				<div class="card" style="width: 18rem;">
                        					<img class="card-img-top" id="card-img-top" src="assets/img/default-avatar.png" width="200" height="200">
                        					<div class="card-body">
                        						<h5 class="card-title"align="left">Seleccione imagen (*.png)</h5>
                               					<div class="form-group">
                        							<input type="file" class="form-control-file" name="image" id="image">
                        						</div>
                        						<div id="btnsubir">
                        						<input type="button" class="btn btn-primary upload" value="Subir"></div>
                        						
                        					<div id="btnsalir" style="display:none"><input type="button" class="btn btn-primary upload" onClick="clean();" value="Salir"></div>
                        					</div>
                        				</div>
                        				
                                    </form>
                                    
                                </div>
                                
                            </div>
                            <div id="error01" align="center"></div>

                        </div>
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
				<script src="../../assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>-->
				<!-- bootstrap color picker 
				<script src="../../assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>-->
				<!-- SlimScroll 
				<script src="../../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>-->
				<!-- iCheck 1.0.1 
				<script src="../../assets/plugins/iCheck/icheck.min.js"></script>-->


				<!-- Page script -->
				<script>
				
				$(document).ready(function() {
                $(".upload").on('click', function() {
                    var formData = new FormData();
                    var files = $('#image')[0].files[0];
                    formData.append('file',files);
                    $.ajax({
                        url: 'php/admin/val_upload.php',
                        type: 'post',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            if(response == 1) {
                                $('#error01').hide().html('<p> </p><div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>¡Error!</strong> Seleccione un archivo<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
						           return false;
                            }else if(response == 2) {
                                $('#error01').hide().html('<p> </p><div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>¡Error!</strong> Formato incorrecto<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
						           return false;
                            }
                            else if(response == 3) {
                                $('#error01').hide().html('<p> </p><div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>¡Error!</strong> Ruta de almacenamiento no encontrada<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
						           return false;
                            }else {
                                $(".card-img-top").attr("src", response);
                                $('#error01').hide().html('<p> </p><div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Guardado!</strong> Imagen cargada con éxito.<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
                                document.getElementById('btnsalir').style.display ='inherit';
                                document.getElementById('btnsubir').style.display ='none';
                            }
                        }
                    });
                        return false;
                });
                });

				  $(function () {
					//Initialize Select2 Elements
					//$('.select2').select2()

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
					

					function clean(){
					
                        document.getElementById("fr1").reset(); 
						
					}
					
				function modificar(){
					var a1 = document.getElementById("ci"); //obligatorio
					var a2 = document.getElementById("fname"); //obligatorio
					var a3 = document.getElementById("flastname"); //obligatorio
					var b1 = document.getElementById("cancel");
					var b2 = document.getElementById("save");

					var dataString = '&a1=' + a1.value + '&a2=' + a2.value + '&a3=' + a3.value + '&a4=' + a4.value + '&a5=' + a5.value + '&a6=' + a6.value + '&a7=' + a7.value + '&a8=' + a8.value + '&a9=' + a9.value + '&a10=' + a10.value + '&a11=' + a11.value + '&a12=' + a12.value  + '&a13=' + a13.value + '&a14=' + a14.value;
					
					if (a1.value == "" || a2.value == "" || a3.value == "" || a4.value == "" || a6.value == "" || a7.value == "" || a10.value == "") {
						$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>¡Error!</strong> Complete todos los campos obligatorios (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
						return false;
					}else{
						if (confirm("\xbfContinuar y modificar?")){
							b2.disabled = true;
							$.ajax({
								type: 'POST',
								url: 'php/admin/val_saveuser.php', 
								data:  dataString,
								success: function(x){
									if(x==1){
										$('#MsjError').hide().html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Guardado!</strong> Usuario modificado con éxito.<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
									}
									else if(x==2){
										$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> Complete todos los campos obligatorios (*)<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
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
				
				function mostrarBusqueda(){
					if (document.getElementById('bus').value=="user"){
						document.getElementById('ci2').style.display ='none';
						document.getElementById('us2').style.display ='inherit';
					}else{
						document.getElementById('us2').style.display ='none';
						document.getElementById('ci2').style.display ='inherit';
					}
					document.getElementById('MsjError0').style.display ='none';
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
					$('#carga').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="20" height="20"/>  Buscando...</p>').fadeIn(500);
					$.ajax({
						type: 'POST',
						url: 'php/admin/val_moduser.php', 
						data:  dataStringx,
						success: function(x){
						    document.getElementById('carga').style.display ='none';
						    document.getElementById('MsjError0').style.display ='none';
							if(x==2){ 
								$('#MsjError0').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError2()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> No se recibió ningun valor<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
								document.getElementById('buscar1').disabled = false;
							}
							else if(x==3){
								$('#MsjError0').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError2()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> Cédula no existe<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
								document.getElementById('buscar1').disabled = false;
							}else{
								document.getElementById('bus').disabled = true;
								document.getElementById('usD').disabled = true;
								document.getElementById('ciD').disabled = true;
								
								$('#carga').hide().html('<img src="assets/img/ok.jpg" width="20" height="20"/><label id="Label1"></label>').fadeIn(500);
								
								document.querySelector('#Label1').innerText = "  "+ x.split('$$')[1] +" "+ x.split('$$')[3];
								
								//setTimeout ('charge1()', 2000); 
                                document.getElementById('cont1').style.display ='inherit';
							}

						}
					});
				}
				
				$('#loader2').fadeOut(1500);
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