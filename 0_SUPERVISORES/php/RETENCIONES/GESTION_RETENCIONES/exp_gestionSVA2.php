<?php
  //sleep(1);
  session_start();
  include '../../../../php/conexion_bd.php';
  if(!empty($_SESSION['id'])){ 
  //valido si el usuario esta bloqueado
  		$trx="SELECT activo, usuario FROM usuarios WHERE id={$_SESSION['id']}";  
		$resB=mysqli_query($enlace,$trx);
		$filaB = mysqli_fetch_array($resB);
		if ($filaB['activo'] != 3){
?>


			<!DOCTYPE html>
			<html>
			<head>
			  <meta charset="utf-8">
			  <meta http-equiv="X-UA-Compatible" content="IE=edge">
			  <title>Formularios - Asesores</title>
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
					Información de Retenciones
				  </h1>
				  <ol class="breadcrumb">
					<li><a href="../menu.php"><i class="fa fa-dashboard"></i> Principal</a></li>
					<li><a>Usuario</a></li>
					<li class="active">Retenciones</li>
				  </ol>
				</section>
				<form action="" method="post" enctype="multipart/form-data" name="addU" id="addU">
					<!-- Main content -->
					<section class="content" >
					
						<div class="row">
							<div class="col-md-3">&nbsp;</div>
							<div class="col-md-6">
								<div class="box box-default">
									<!-- /.box-header -->
									<div class="box-body">
										<div class="row">
											<!-- /.columna izquierda -->
											<div class="col-md-6">
												<div class="form-group" id="us2">
													<label>*Usuario:</label>
													<select class="form-control select2" style="width: 100%;" id="usD">
													<option selected="selected" value="" disabled>Seleccione..</option>
													<option value="-1">Todos los asesores</option>
													    <?php
															$trx9="SELECT id, usuario FROM usuarios WHERE `servicio` like '%5%' ORDER BY `usuario` ASC";  
															$resS=mysqli_query($enlace,$trx9);
														    while ($filaX = mysqli_fetch_array($resS)) {
																echo '<option value="'.$filaX['id'].'">'.$filaX['usuario'].'</option>';
														    }
														?>
													</select>
													<div id="id1-1"></div>
												</div>
												<p class="help-block">* Campos Obligatorios.</p>
											</div>
											
											<!-- /.columna derecha -->
											<div class="col-md-6">
											
											
												<div class="form-group" id="us3">
													<label>*Fecha:</label>
													<select id="refresh"  onchange="pro_estado();" class="form-control select2" style="width: 100%;">
												      <option selected="selected" value="" disabled>Seleccione..</option> 
												      <option value="1">Hoy</option>
													  <option value="2">Ayer</option>
													  <option value="3">Mes Actual</option>
													  <option value="4">Mes Anterior</option>
     												</select>
     												<div id="id2-2"></div>
												</div>
												
												
										        <div class="form-group" style="display:none" id="rangox">
                                                    <label>*Rango de fechas:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="text" class="form-control pull-right" id="reservation">
                                                    </div>
                                                    <div id="id3-3"></div>
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
											<div style="padding-left:240px;"><button type="button" id="buscar1" onClick="find();" class="btn btn-info pull-left" >Buscar</button></div>
										</div>
									</div>
								</div>
							</div>
						</div>	
						
					  <!-- aqui cargo la tabla -->
					  <div style="display:none" id="mostra_tab">
    					  <div class="row">
        				      <div class="col-md-12">
        				        <div class="box box-default">
                                    <div id="carga"></div>
                                </div>
                              </div>
                          </div>
                      </div>
					  
					</form>		
					</section>
					<!-- Bootstrap 3.3.7 -->

				<!-- InputMask -->
				<script src="assets/plugins/input-mask/jquery.inputmask.js"></script>
				<script src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
				<script src="assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
				<!-- date-range-picker -->
            	<script src="assets/bower_components/moment/min/moment.min.js"></script>
            	<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>


				<!-- Page script -->
				<script>
				//campos
				var camp1 = document.getElementById("usD");
			    var camp2 = document.getElementById("refresh");
			    var camp3 = document.getElementById("reservation");
			    
			    //div
			    var d1 = document.getElementById("us2");
			    var d2 = document.getElementById("us3");
			    var d3 = document.getElementById("rangox");
			    
			    //mensajes error
			    var e1 = document.getElementById("id1-1");
			    var e2 = document.getElementById("id2-2");
			    var e3 = document.getElementById("id3-3");

				  $(function () {
					//Initialize Select2 Elements
					//$('.select2').select2()

					//Datemask dd/mm/yyyy
					$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
					//Datemask2 mm/dd/yyyy
					$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
					//Money Euro
					$('[data-mask]').inputmask()
					
					//$('#reservation').daterangepicker()
                    //Date range picker with time picker
                    
                    $('#reservation').daterangepicker({
                        "locale": {
                            "format": "YYYY-MM-DD",
                            "separator": " | ",
                            "applyLabel": "Aplicar",
                            "cancelLabel": "Cancelar",
                            "fromLabel": "Desde",
                            "toLabel": "Hasta",
                            "customRangeLabel": "Custom",
                            "daysOfWeek": [
                                "Do",
                                "Lu",
                                "Ma",
                                "Mi",
                                "Ju",
                                "Vi",
                                "Sa"
                            ], 
                            "monthNames": [
                                "Enero",
                                "Febrero",
                                "Marzo",
                                "Abril",
                                "Mayo",
                                "Junio",
                                "Julio",
                                "Agosto",
                                "Septiembre",
                                "Octubre",
                                "Noviembre",
                                "Diciembre"
                            ],
                            "firstDay": 1
                        }
                    })

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

                    function pro_estado(){
                        if(camp2.value === "5"){
                           document.getElementById('rangox').style.display = '';
                        }else{
                           document.getElementById('rangox').style.display = 'none';
                        }
                    }
                    
                    var a = 0;
                    var b = 0;
                    var c = 0;
                    
                    function find(){
                        if(camp1.value === ""){
                           d1.className = "form-group has-error";
    					   $('#id1-1').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione el usuario</span>').fadeIn(500);
    					   a = 1;
                        }else{
                           d1.className = "form-group has-feedback";
    					   $('#id1-1').hide().html('').fadeIn(500);
    					   a = 0;
                        }
                        
                        if(camp2.value === ""){
                           d2.className = "form-group has-error";
    					   $('#id2-2').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione la fecha</span>').fadeIn(500);
    					   b = 1;
                        }else{
                           d2.className = "form-group has-feedback";
    					   $('#id2-2').hide().html('').fadeIn(500);
    					   b = 0;
                        }
                        
                        if(camp2.value === "5"){
                            if(camp3.value === ""){
                               d3.className = "form-group has-error";
        					   $('#id3-3').hide().html('<span class="help-block"><i class="fa fa-bell-o"></i> Seleccione el rango de fecha</span>').fadeIn(500);
        					   c = 1;
                            }else{
                               d3.className = "form-group has-feedback";
        					   $('#id3-3').hide().html('').fadeIn(500);
        					   c = 0;
                            }
                        }
                        
                        if(a != 1 && b != 1 && c != 1){
                           document.getElementById('buscar1').disabled = true;
                           $('#carga').hide().html('<p class="help-block" align="center"><img src="assets/img/gif-carga.gif" width="50" height="50"/></p><p align="center">Buscando...</p>').fadeIn(500);
                           $("#carga").load('0_SUPERVISORES/php/RETENCIONES/GESTION_RETENCIONES/exp_val_exp_gestionSA32.php?a1='+camp1.value+'&a2='+camp2.value);
                           document.getElementById('mostra_tab').style.display = '';
                           document.getElementById('buscar1').disabled = false;
                        }
                    }

				$('#loader2').fadeOut(1500);
				</script>
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