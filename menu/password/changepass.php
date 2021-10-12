<?php
  session_start();
  include '../../php/conexion_bd.php';
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
		  <!-- Bootstrap 3.3.7 -->
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
		  <script>
		     $('#loader2').fadeIn(3000);
		  </script>

		</head>
		<body class="hold-transition skin-blue sidebar-mini">

			<div class="loader2" id="loader2"></div>

			<section class="content-header">
			  <h1>
				Cambio de Password 
			  </h1>
			  <ol class="breadcrumb">
				<li><a href="menu.php"><i class="fa fa-dashboard"></i> Principal</a></li>
				<li><a>Password</a></li>
				<li class="active">Cambiar</li>
			  </ol>
			</section>
			
			<form action="" method="post" enctype="multipart/form-data" name="fpass" id="fpass">		
				<!-- Main content -->
				<section class="content" >
				  <!-- SELECT2 EXAMPLE -->
					<div class="row">
					<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4">
							<div class="box box-default">
								<!-- /.box-header -->
									<div class="box-body">
										<div class="row">
											<div class="col-md-12">
											    
												<div id="camp1" class="form-group">
													<label for="passAct">
													<div>Password Actual:</div>
													</label>
													<input type="password" id="passAct" class="form-control" onKeyPress="return validar_texto(event)" placeholder="Password Actual"  align="center" onkeyUp="cambio();" required>
												</div>
												
												<div id="camp2" class="form-group">
													<label for="newpass1">
													<div>Nuevo Password:</div>
													</label>
													<input type="password" class="form-control" id="newpass1" onKeyPress="return validar_texto(event)" placeholder="Nuevo Password" disabled="true" maxlength="12" onkeyUp="cambio2();" required>
												</div>
												
												<div id="camp3" class="form-group">
													<label for="newpass2">
													<div>Repita Nuevo Password:</div>
													</label>
													<input type="password" class="form-control" id="newpass2" onKeyPress="return validar_texto(event)" placeholder="Repita Nuevo Password" disabled="true" maxlength="12" onkeyUp="cambio3();" required>
												</div> 
												<div class="box-tools" id="MsjError2" align="center">
												<!–mensaje de carga>
												</div>	
												<div class="box-tools" id="MsjError" align="center">
												<!–mensaje de error–>
												</div>									
											</div>
											<table class="table text-center" >
												<tr>
													<td width="49%">
														<button type="button" id="cancel" onClick="clean();" class="btn btn-info pull-right">Cancelar</button>
												  </td>
													<td width="2%">									</td>
													<td width="49%">
														<button type="button" id="change" onClick="changePass();" class="btn btn-info pull-left" disabled="true">Cambiar</button>
												  </td>
												</tr>
											</table>
										</div>
									</div>
								<div class="col-md-4">&nbsp;</div>
							</div>
						</div>
				</section>
			</form>

		    <script>
		    
		    var pass1 = document.getElementById("passAct");
			var pass2 = document.getElementById("newpass1");
			var pass3 = document.getElementById("newpass2");
			var change = document.getElementById("change");
			
			camp1 = document.getElementById("camp1");
            camp2 = document.getElementById("camp2");
            camp3 = document.getElementById("camp3");
			
			function validar_texto(e){
				tecla = (document.all) ? e.keyCode : e.which;
					
				//Espacios
				if (tecla==32) return false; 

			}
			
			function clean(){
				document.getElementById("fpass").reset();
				camp1.className = "form-group";
				camp2.className = "form-group";
				camp3.className = "form-group";
				closeError();
				pass2.disabled = true;
				pass3.disabled = true;
				change.disabled = true;
				pass1.focus();
			}
			
			function clean2(){
				document.getElementById("fpass").reset();
				camp1.className = "form-group";
				camp2.className = "form-group";
				camp3.className = "form-group";
				pass2.disabled = true;
				pass3.disabled = true;
				change.disabled = true;
				pass1.focus();
			}
			
			function cambio(){				
				if (pass1.value==""){
					pass2.disabled = true;
					pass3.disabled = true;
					change.disabled = true;
				}else{ 
                    pass2.disabled = false;
					pass3.disabled = false;
					change.disabled = false;
				}
			}
			
			function cambio2(){
				if (pass2.value == pass3.value && pass1.value!="" && pass2.value.length>=8 && pass3.value.length>=8){
					change.disabled = false;
				}else{
					change.disabled = true;
			    }
			}
			
			function cambio3(){
				if (pass2.value == pass3.value && pass1.value!="" && pass2.value.length>=8 && pass3.value.length>=8){
					change.disabled = false;
				}else{
					change.disabled = true;
			    }
			}
			
			function changePass(){
			   closeError();
			if (confirm("\xbfSeguro desea cambiar la contraseña?")){
				$('#MsjError').hide().html('<label>Validando... <img src="assets/img/gif-carga.gif" width="25" height="25"/></label>').fadeIn();
				var dataString = 'passAct=' + pass1.value + '&newpass1=' + pass2.value + '&newpass2=' + pass3.value;
				
				if (pass1.value == "" || pass2.value == "" || pass3.value == "") {
					$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>¡Error!</strong> Todos los campos deben ser completados<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
					camp1.className = "form-group has-error";
					camp2.className = "form-group has-error";
				    camp3.className = "form-group has-error";
					return false;
				}
				else if (pass2.value.length < 8 || pass3.value.length < 8 ) {
					$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>¡Error!</strong> El Nuevo password debe tener al menos 8 caracteres<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
					camp2.className = "form-group has-error";
				    camp3.className = "form-group has-error";
					return false;
				}
				else if (pass2.value.length > 12 || pass3.value.length > 12 ) {
					$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>¡Error!</strong> El Nuevo password no debe exceder los 12 caracteres<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
					camp2.className = "form-group has-error";
				    camp3.className = "form-group has-error";
					return false;
				}
				else if (pass1.value == pass3.value) {
					$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>¡Error!</strong> Password Actual y Nuevo no pueden ser iguales<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
					camp1.className = "form-group has-error";
					camp2.className = "form-group has-error";
					camp3.className = "form-group has-error";
					return false;
				}
				else if (pass2.value != pass3.value) {
					$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>¡Error!</strong> El Nuevo password y su validación no coinciden<a href="#" class="alert-link"></a>.</div>').fadeIn();
						camp2.className = "form-group has-error";
				    	camp3.className = "form-group has-error";
					return false;
				}else{
					change.disabled = true;
						$.ajax({
							type: 'POST',
							url: 'php/password/val_pass.php', 
							data:  dataString,
							success: function(x){
								if(x==1){
									window.setTimeout($('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> Los campos no pueden estar vacios.<a href="#" class="alert-link"></a>.</div>').fadeIn(500),1000);
									camp1.className = "form-group has-error";
					                camp2.className = "form-group has-error";
				                 	camp3.className = "form-group has-error";
									change.disabled = false;
								}else if(x==2){
									$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> El nuevo password y su validación no coinciden.<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
									camp2.className = "form-group has-error";
				                 	camp3.className = "form-group has-error";
									change.disabled = false;
								}else if(x==3){
									$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> El nuevo password debe tener entre 8 y 12 caracteres.<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
									camp2.className = "form-group has-error";
				                 	camp3.className = "form-group has-error";
									change.disabled = false;
								}else if(x==4){
									window.setTimeout($('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> Password actual incorrecto. Al 3er intento fallido será bloqueado.<a href="#" class="alert-link"></a>.</div>').fadeIn(1500),3000);
									camp1.className = "form-group has-error";
									change.disabled = false;
								}else if(x==5){
									$('#MsjError').hide().html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Guardado!</strong> Password cambiado con éxito.<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
									clean2();
								}else if(x==6){
									alert("Usuario bloqueado, contacte al administrador.");
									self.location = "index.php";
								}else if(x==7){
									$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> El nuevo password no puede ser igual actual.<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
									camp1.className = "form-group has-error";
									camp2.className = "form-group has-error";
									camp3.className = "form-group has-error";
									change.disabled = false;
								}
							}
						});
				}
				return false; 
			}else{
				change.disabled = false;
				return 0;
			}
				
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