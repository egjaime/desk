<?php
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
		  <title>Bloqueo usuarios</title>
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
		  <link rel="stylesheet" href="../../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
		  <!-- Font Awesome -->
		  <link rel="stylesheet" href="../../assets/bower_components/font-awesome/css/font-awesome.min.css">
		  <!-- Ionicons -->
		  <link rel="stylesheet" href="../../assets/bower_components/Ionicons/css/ionicons.min.css">
		  <!-- Select2 -->
		  <link rel="stylesheet" href="../../assets/bower_components/select2/dist/css/select2.min.css">
		  <!-- Theme style -->
		  <link rel="stylesheet" href="../../assets/dist/css/AdminLTE.min.css">
		  <link rel="stylesheet" href="../../assets/dist/css/skins/_all-skins.min.css">
		  <link rel="stylesheet"
				href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		</head>
		<body class="hold-transition skin-blue sidebar-mini">

			<div class="loader2" id="loader2"></div>

			<section class="content-header">
			  <h1>
				Bloquear / Desbloquear Usuarios
			  </h1>
			  <ol class="breadcrumb">
				<li><a href="../menu.php"><i class="fa fa-dashboard"></i> Principal</a></li>
				<li><a>Bloqueo</a></li>
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
												<div class="form-group">
													<label for="passAct">
													<div>Seleccione usuario:</div>
													</label>
													<select class="form-control select2" style="width: 100%;" id="bloq1" onchange='mostrarBusqueda()'>
														<option selected="selected" value="" disabled>Seleccione..</option>
													    <?php
															$trx9="SELECT id, usuario FROM usuarios ORDER BY `usuario` ASC";  
															$resS=mysqli_query($enlace,$trx9);
														    while ($filaX = mysqli_fetch_array($resS)) {
																echo '<option value="'.$filaX['id'].'">'.$filaX['usuario'].'</option>';
														    }
														?>
													</select>
												</div>

												<div id="carga" align="center">
												  <!–mensaje de carga–>
												</div>	
												
												
												<div class="form-group">
													<label for="newpass1">
													<div>Estado Actual:</div>
													</label>
													<input class="form-control" id="bloq2" onKeyPress="return validar_texto(event)" placeholder="Selecione.." disabled="true" maxlength="12" onkeyUp="cambio2();" required>
												</div>
												
												
												<div class="form-group">
													<label for="newpass2">
													<div>Cambiar estado a:</div>
													</label>
													<select id="bloq3" class="form-control select2" style="width: 100%;"  disabled="true">
													  <option selected="selected" value="" disabled>Seleccione..</option>
													  <option value="3">Bloqueado</option>
													  <option value="0">Desbloqueado</option>
													</select>
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
														<button type="button" id="cancel" onClick="clean2();" class="btn btn-info pull-right">Cancelar</button>
												  </td>
													<td width="2%">	</td>
													<td width="49%">
														<button type="button" id="change" onClick="changebloq();" class="btn btn-info pull-left" disabled="true">Cambiar</button>
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
			
			function clean(){
				document.getElementById("change").disabled = true;
				document.getElementById("bloq1").value = "";
				document.getElementById('bloq2').value = "Selecione..";
				document.getElementById('bloq3').value = "";
				document.getElementById('bloq3').disabled = true;
			}
			
			function clean2(){
				document.getElementById("change").disabled = true;
				document.getElementById("bloq1").value = "";
				document.getElementById('bloq2').value = "Selecione..";
				document.getElementById('bloq3').value = "";
				document.getElementById('bloq3').disabled = true;
				$('#MsjError').fadeOut(500);
			}
		    
		    
			function mostrarBusqueda(){
				var dataString = 'a1=' + document.getElementById('bloq1').value;
				document.getElementById('MsjError').style.display ='none';
					$('#carga').hide().html('<p class="help-block" align="center"><img src="assets/img/cargando.gif" width="25" height="25"/>Buscando...</p><p align="center"></p>').fadeIn(10);
					$.ajax({
						type: 'POST',
						url: 'php/admin/val_bus_bloq.php', 
						data:  dataString,
						success: function(x){
						    document.getElementById('carga').style.display ='none';
							if(x==4){
								//error de sistema
								$('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> El usuario no posee ID, valide la BD. <a href="#" class="alert-link"></a>.</div>').fadeIn(500);
							}else if(x==3){
								//usuario bloqueado
								document.getElementById('bloq2').value = "Bloqueado";
								document.getElementById('bloq3').disabled = false;
								document.getElementById("bloq3").options[1].disabled = true;
								document.getElementById("bloq3").options[2].disabled = false;
								document.getElementById("change").disabled = false;

							}else if(x==0 || x==1 || x==2){
								//usuario no bloqueado
								document.getElementById('bloq2').value = "Desbloqueado";
								document.getElementById('bloq3').disabled = false;
								document.getElementById("bloq3").options[2].disabled = true;
								document.getElementById("bloq3").options[1].disabled = false;
								document.getElementById("change").disabled = false;
							}
						}
					});
				return false; 		
			}
			
			function changebloq(){
				var dataString = 'a2=' + document.getElementById('bloq1').value + '&a3=' + document.getElementById('bloq3').value;
			   	$('#MsjError').hide().html('<p class="help-block" align="center"><img src="assets/img/cargando.gif" width="25" height="25"/>Cambiando...</p><p align="center"></p>').fadeIn(10);
					if (confirm("\xbfSeguro desea cambiar el estado del usuario?")){
						$.ajax({
							type: 'POST',
							url: 'php/admin/val_mod_bloq.php', 
							data:  dataString,
							success: function(x){
							    document.getElementById('MsjError').style.display ='none';
								if(x==1){
									window.setTimeout($('#MsjError').hide().html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Msg Server:</strong> El usuario no posee ID, valide la BD<a href="#" class="alert-link"></a>.</div>').fadeIn(500),1000);
								}else if(x==2){
									$('#MsjError').hide().html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" onclick="closeError()"  aria-hidden="true">&times;</button><strong>Guardado!</strong> Estado cambiado con éxito<a href="#" class="alert-link"></a>.</div>').fadeIn(500);
									clean();
								}
							}
						});
					}else{
						return 0;
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
			echo '<script language =  javascript>  alert("Usuario Bloqueado, contacte al administrador"); self.location = "/../../index.php"; </script>';
		}
	}else{
	   echo '<script language =  javascript>  self.location = "/../../index.php" </script>';
	}
	mysqli_close($enlace);
?>